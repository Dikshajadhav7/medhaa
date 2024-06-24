
<?php

        include "submit_entry_pass.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Cultural Fest - Entry Pass</title>
   
    <style>
     body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #f0f0f0;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
    width: 100%;
}

main {
    margin: 20px;
    width: 100%;
    max-width: 600px;
}

.pass-form {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.pass-form h2 {
    margin-top: 0;
}

.pass-form label {
    display: block;
    margin: 10px 0 5px;
}

.pass-form input, .pass-form select {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    width: 100%;
    margin-top: 10px;
}

button:hover {
    background-color: #45a049;
}

.payment-field {
    display: none; /* Initially hide payment fields */
}
.navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(255, 0, 140);
            padding: 10px 20px;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            height:50px;
            margin-right: 20px;
        }

        .nav-menu {
            list-style: none;
            display: none;
            flex-direction: column;
            width: 100%;
            align-items: center;
            background-color: black;
            position: absolute;
            top: 60px;
            left: 0;
        }

        .nav-menu.active {
            display: flex;
        }

        .nav-menu li {
            margin: 10px 0;
        }

        .nav-link {
            text-decoration: none;
            color: white;
            font-size: 1em;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffcc00;
        }

        .menu-toggle {
            display: flex;
            flex-direction: column;
            cursor: pointer;
            margin-left: auto;
        }

        .menu-toggle .bar {
            height: 3px;
            width: 25px;
            background-color: white;
            margin: 4px 0;
            transition: 0.3s;
        }

        @media (min-width: 769px) {
            .nav-menu {
                display: flex;
                flex-direction: row;
                position: static;
                background-color: transparent;
                width: auto;
            }

            .nav-menu li {
                margin: 0 20px;
            }

            .menu-toggle {
                display: none;
            }
        }



    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-menu">
            <li><a href="index.html" class="nav-link">Home</a></li>
            <li><a href="aboutus.html" class="nav-link">About Us</a></li>
            <li><a href="team.html" class="nav-link">Teams</a></li>
            <li><a href="memories.html" class="nav-link">Memories</a></li>
            <li><a href="achievement.html" class="nav-link">Achievements</a></li>
            <li><a href="events.html" class="nav-link">Events</a></li>
        </ul>
    </nav>
    <header>
        <h1>Medha 2024</h1>
        <p>Get your entry pass now!</p>
    </header>
    <main>
    <section class="pass-form">
        <h2>Entry Pass Registration</h2>
        <form id="entryPassForm" action="submit_entry_pass.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="quantity">Number of Passes:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="10" required>
            
            <label for="paymentMethod">Payment Method:</label>
            <select id="paymentMethod" name="paymentMethod" required>
                <option value="credit_card">Credit Card</option>
                <option value="qr_code">QR Code</option>
            </select>
            
            <div id="card-element" class="payment-field">
                <!-- A Stripe Element will be inserted here for credit card payments. -->
            </div>
            <div id="qr-code-field" class="payment-field">
                <!-- Placeholder for QR code scanning UI. -->
                <img src="qr-code-placeholder.png" alt="QR Code Placeholder">
            </div>
            
            <button type="submit">Get Pass</button>
        </form>
    </section>
    </main>
    <footer>
        <p>&copy; 2024 Amruthvahini Sanstha. All rights reserved.</p>
    </footer>
    <script >

const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        document.addEventListener('DOMContentLoaded', function() {
    const stripe = Stripe('your-publishable-key'); // Replace with your Stripe publishable key
    const elements = stripe.elements();

    const card = elements.create('card');
    card.mount('#card-element');

    card.on('change', function(event) {
        const displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    const form = document.getElementById('entryPassForm');
    const paymentMethodField = document.getElementById('paymentMethod');
    const cardField = document.getElementById('card-element');
    const qrCodeField = document.getElementById('qr-code-field');

    paymentMethodField.addEventListener('change', function() {
        const selectedMethod = paymentMethodField.value;

        if (selectedMethod === 'credit_card') {
            cardField.style.display = 'block';
            qrCodeField.style.display = 'none';
        } else if (selectedMethod === 'qr_code') {
            cardField.style.display = 'none';
            qrCodeField.style.display = 'block';
        }
    });

    form.addEventListener('submit', async function(event) {
        event.preventDefault();
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const quantity = document.getElementById('quantity').value;
        const selectedMethod = paymentMethodField.value;

        if (name && email && phone && quantity) {
            if (selectedMethod === 'credit_card') {
                const { paymentIntent, error } = await stripe.createPayment({
                    amount: quantity * 500, // assuming each pass costs 500 cents (5 dollars)
                    currency: 'usd',
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: name,
                            email: email,
                            phone: phone,
                        },
                    },
                    confirm: true,
                });

                if (error) {
                    console.error(error);
                    alert('Payment failed: ' + error.message);
                } else {
                    alert(`Thank you, ${name}! Your payment for ${quantity} pass(es) was successful.`);
                    form.reset();
                    card.clear();
                }
            } else if (selectedMethod === 'qr_code') {
                // Placeholder for QR code scanning functionality
                alert('Please scan the QR code to complete your payment.');
            }
        } else {
            alert('Please fill in all fields.');
        }
    });
});

    </script>
</body>
</html>
