

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Responsive Navbar and Main Section</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Rubik", sans-serif;
                    font-optical-sizing: auto;
                font-weight: <weight>;
                 font-style: normal;
            background-color: #2f1d1d; 
            
            
        }
        /* body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('crack2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            filter: blur(2px);
            z-index: -1;
            height:100vh;
        } */

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(255, 0, 132);
            padding: 10px 20px;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
            height:100px;
            font-size:22px;
        }

        
        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            height:70px;
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
            margin-left: 10px; /* Adjusted margin-left */
        }

        .menu-toggle .bar {
            height: 3px;
            width: 25px;
            background-color: white;
            margin: 4px 0;
            transition: 0.3s;
        }

        .social-media {
            display: flex;
            align-items: center;
        }

        .social-media a {
            text-decoration: none;
            color: white;
            font-size: 1.2em;
            margin-left: 15px;
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

        .main-section {
            padding: 20px;
            text-align: center;
            margin-top:40px; /* Added space between navbar and content */
        }

        .main-content {
            /* max-width: 800px; */
            
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* .main-content .logo img {
            height: 100px;
        } */

        .main-content h2 {
            font-size: 2em;
            margin: 20px 0 10px;
        }

        .main-content p {
            color: #666;
            margin-bottom: 20px;
        }

        .main-content a.button {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .main-content a.button:hover {
            background-color: #0056b3;
        }
     .video-container {
            width: 100%;
            height: auto;
            overflow: hidden;
            background: #000;
            margin-bottom: 40px;
        }

        .video-container video {
            width: 100%;
            height: auto;
            object-fit: cover;
        }


        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            flex: 1 1 calc(50% - 40px);
            max-width: calc(50% - 40px);
            min-height: 200px; /* Added min-height for cards */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card p {
            color: #ffcc00;
            margin-bottom: 10px;
        }

        .card a.button {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .card a.button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .card {
                max-width: 100%;
                flex: 1 1 100%;
            }
             .main-content .logo img {
            height:240px;
            width:190px;
            padding: 0%;
        } 
        }
    

.hero-section {
    text-align: center;
    padding: 80px 20px;
    color: white;
}

.hero-content {
    max-width: 800px;
    margin: 0 auto;
}

.hero-content h1 {
    font-size: 3em;
    margin-bottom: 20px;
}

.hero-content p {
    font-size: 1.2em;
    line-height: 1.6;
    color: #f0f0f0;
}

.institutes-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 40px 20px;
}

.institute {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    text-align: center;
    transition: transform 0.3s ease;
    color: #5d5d5d;
}

.institute:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.institute-icon img {
    max-width: 50px;
    margin-bottom: 20px;
}

.institute h2 {
    font-size: 2em;
    margin-bottom: 10px;
}

.institute p {
    font-size: 1.1em;
    line-height: 1.6;
    margin-bottom: 20px;
}

.footer {
    background-color: #333333;
    color: #ffffff;
    text-align: center;
    padding: 50px 20px;
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
    max-width: 1000px;
    margin: 0 auto;
}


.institute-contact {
    text-align: left;
}

.institute-list {
    list-style-type: none;
    padding: 0;
}

.institute-list li {
    font-size: 1.1em;
    margin-bottom: 10px;
}

.contact-info {
    font-size: 1.1em;
    line-height: 1.6;
}

.contact-info a {
    color: #ffcc00;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-info a:hover {
    color: #ffffff;
}
.schedule {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.day {
    margin-bottom: 40px;
}

.day h2 {
    font-size: 2em;
    margin-bottom: 10px;
    color: #333333;
}

.session {
    margin-bottom: 20px;
}

.session h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #007bff;
}

.event {
    display: flex;
    align-items: flex-start;
    padding: 10px;
    border-left: 4px solid #007bff;
}

.event-time {
    font-weight: bold;
    min-width: 120px;
    color: #007bff;
}

.event-details {
    margin-left: 10px;
}

.event-details h4 {
    font-size: 1.2em;
    margin-bottom: 5px;
    color: #333333;
}

.event-details p {
    color: #666666;
}
.calendar {
    max-width: 600px;
    margin: 20px auto;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 20px;
    text-align: center;
}

.month {
    text-align: center;
    padding: 10px 0;
}

.weekdays {
    display: flex;
    justify-content: space-around;
    list-style-type: none;
    padding: 0;
}

.days {
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
    padding: 0;
    justify-content: space-around;
    margin-top: 10px;
}

.days li {
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    margin-bottom: 10px;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s ease;
    position: relative;
}

.days li:hover {
    background-color: #007bff;
    color: white;
}

.days .highlight {
    background-color: #ffc107;
    color: #333333;
}

.popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

.popup-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    max-width: 80%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.popup h3 {
    margin-top: 0;
    color: #333333;
}

.event {
    margin-bottom: 10px;
}

.event-time {
    font-weight: bold;
    color: #007bff;
}

.event-details h4 {
    font-size: 1.1em;
    margin-bottom: 5px;
    color: #333333;
}

.event-details p {
    color: #666666;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    color: #aaaaaa;
}

.close:hover,
.close:focus {
    color: #000000;
}
footer {
    background-color: #000000;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.social-icons {
    flex-grow: 1;
    text-align: right;
}

.social-icons a {
    display: inline-block;
    margin-left: 10px;
}

.contact-info {
    flex-grow: 2;
    text-align: left;
}

.contact-info p {
    margin: 5px 0;
}


        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            .footer-contact, .footer-social-media {
                margin: 10px 0;
            }

            .footer-social-media a {
                margin: 5px;
                font-size: 20px;
            }

        }
        header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
    width: 100%;
}

main {
    text-align: center;
    margin-top: 20px;
}

.card {
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    width:600px;
    height:250px;
    margin: 0 auto;
    border-radius: 8px;
}

.card-content {
    padding: 20px;
    font-size: 20px
}

.card h2 {
    margin-top: 0;
    color: #333;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    margin-top: 20px;
}

button:hover {
    background-color: #45a049;
}

        
        
        </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="aboutus.php" class="nav-link">About Us</a></li>
            <li><a href="team.php" class="nav-link">Teams</a></li>
            <li><a href="memories.php" class="nav-link">Memories</a></li>
            <li><a href="achievement.php" class="nav-link">Achievements</a></li>
            <li><a href="events.php" class="nav-link">Events</a></li>
        </ul>
        
    </nav>

    <section class="main-section">
        <div class="main-content">
            <div class="logo">
                <img src="medha.png" alt="Logo" height="500px" width="600px">
            </div>
            <h2>#Discover Your Perfect Event!</h2>
            <p>Are you looking for an opportunity to shine and make a difference? Explore our wide range of events designed to cater to diverse interests and passions. Whether you're into arts, sports, academics, or community service, there's something for everyone. Participating in the right event can be a game-changer, offering you the chance to grow, connect with like-minded individuals, and create unforgettable memories. Don’t miss out on finding the event that’s perfect for you – dive in and discover where your enthusiasm can take you!</p>
            <a href="events.html" class="button">Explore Event</a>
        </div>
    </section>
    <!-- <section class="hero-section" style="background-image: url('CRACK.jpg');">
        <div class="hero-content">
            <h1 style="color: #ffc107;">Welcome to MEDHA 2K24</h1>
            <p>Experience the Vibrant Spirit of Our 10 Institutes</p>
            <p>Get ready for an unforgettable celebration of talent, creativity, and innovation as all 10 institutes come together for MEDHA. Explore the unique events and activities each institute has to offer!</p>
        </div>
    </section> -->
    <!-- <section class="main-section">
        <div class="video-container">
            <video autoplay loop muted>
                <source src="medha2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>  -->

    <!-- <section class="latest-updates">
        <div class="calendar">
            <div class="month">
                <h2>March</h2>
            </div>
            <ul class="weekdays">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
            <ul class="days">
                Days dynamically generated with JavaScript
            <!-- </ul>
        </div> -->
<!--     
        <!-- Popup for March 16th -->
        <!-- <div class="popup" id="popup-16">
            <div class="popup-content">
                <span class="close" onclick="closePopup('popup-16')">&times;</span>
                <h3>March 16th Schedule</h3>
                <div class="event">
                    <div class="event-time">10:00 AM - 12:00 PM</div>
                    <div class="event-details">
                        <h4>Art Exhibition</h4>
                        <p>Showcasing paintings and sculptures.</p>
                    </div>
                </div>
            </div>
        </div> --> 
    
        <!-- Popup for March 17th -->
        <!-- <div class="popup" id="popup-17">
            <div class="popup-content">
                <span class="close" onclick="closePopup('popup-17')">&times;</span>
                <h3>March 17th Schedule</h3>
                <div class="event">
                    <div class="event-time">2:00 PM - 4:00 PM</div>
                    <div class="event-details">
                        <h4>Workshop: Digital Art Techniques</h4>
                        <p>Learn advanced digital art techniques from industry experts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->
    <!-- <div class="card" id="passCard">
        <div class="card-content">
            <h2>Your Online Pass</h2>
            <p>This is your online pass for MEDHA 2K24.</p>
            <p>Valid from: march 16, 2024</p>
            <p>Expires: march 17, 2024</p>
            <button id="openPassButton">Get Online Pass</button>
        </div>
    </div> -->
   
    <section class="hero-section" style="background-image: url('CRACK.jpg');">
        <div class="hero-content">
            <h1 style="color: #ffc107;">Welcome to MEDHA 2K24</h1>
            <p>Experience the Vibrant Spirit of Our 10 Institutes</p>
            <p>Get ready for an unforgettable celebration of talent, creativity, and innovation as all 10 institutes come together for MEDHA. Explore the unique events and activities each institute has to offer!</p>
        </div>
    </section>

    <section class="institutes-section" style="background-image: url('CRACK.jpg');">
        <div class="institute">
            
            <h2>Amrutvahini Model School & Junior Colleg</h2>
          
            <p>Contact: +1 123 456 7890</p>
        </div>
        <div class="institute">
            
            <h2>Amrutvahini Nido International Schoo</h2>
            <p>Contact: +1 234 567 8901</p>
        </div>
        <div class="institute">
            
            <h2>Amrutvahini College of D Pharmacy.</h2>
            <p>Contact: +1 234 567 8901</p>
        </div>
        <div class="institute">
         
            <h2>Amrutvahini College of B Pharmacy.</h2>
            <p>Contact: +1 234 567 8901</p>
        </div>
        <div class="institute">
       
            <h2>Amrutvahini Institute of management and Business Administration</h2>
           
            <p>Contact: +1 234 567 8901</p>
        </div>
        <div class="institute">
       
            <h2>Amrutvahini College of Engineering.</h2>
            <p>Contact: +1 234 567 8901</p>
        </div>
        <div class="institute">
         
            <h2>Amruthvahini college of ITI</H2>
            <p>Contact: +1 234 567 8901</p>
        </div>
        
            
        </main>
        
        <!-- Repeat similar structure for other institutes -->
    </section>
    <hr style="background-color: white;">
    <h1 style="color: white; text-align: center;">SCHEDULE</h1>
    <section class="latest-updates"">
        <div class="calendar">
            <div class="month">
                <h2>March</h2>
            </div>
            <ul class="weekdays">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
            <ul class="days">
                <!-- Days dynamically generated with JavaScript -->
            </ul>
        </div>
    
        <!-- Popup for March 16th -->
        <div class="popup" id="popup-16">
            <div class="popup-content">
                <span class="close" onclick="closePopup('popup-16')">&times;</span>
                <h3>March 16th Schedule</h3>
                <div class="event">
                    <div class="event-time">10:00 AM - 12:00 PM</div>
                    <div class="event-details">
                        <h4>Art Exhibition</h4>
                        <p>Showcasing paintings and sculptures.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Popup for March 17th -->
        <div class="popup" id="popup-17">
            <div class="popup-content">
                <span class="close" onclick="closePopup('popup-17')">&times;</span>
                <h3>March 17th Schedule</h3>
                <div class="event">
                    <div class="event-time">2:00 PM - 4:00 PM</div>
                    <div class="event-details">
                        <h4>Workshop: Digital Art Techniques</h4>
                        <p>Learn advanced digital art techniques from industry experts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="card" id="passCard">
        <div class="card-content">
            <h2>Your Online Pass</h2>
            <p>This is your online pass for MEDHA 2K24.</p>
            <p>Valid from: march 16, 2024</p>
            <p>Expires: march 17, 2024</p>
            <button id="openPassButton">Get Online Pass</button>
        </div>
    </div>
    <hr style="background-color: white; margin-top: 20PX;">
    <section class="main-section">
        <div class="video-container">
            <video autoplay loop muted>
                <source src="medha2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div> 
    <footer>
        <div class="footer-content">
            <div class="social-icons">
                <a href="#"><img src="social (1).png" alt="Facebook" height="30px"></a>
                <a href="#"><img src="social (2).png" alt="Twitter" height="30px"></a>
                <a href="#"><img src="social (3).png" alt="Instagram" height="30px"></a>
                <a href="#"><img src="social.png" alt="YouTube"height="30px"></a>
               
            </div>
            <div class="contact-info">
                <p>Contact us: info@example.com</p>
                <p>Phone: +1 123 456 7890</p>
            </div>
        </div>
    </footer>
    <script>

document.getElementById('openPassButton').addEventListener('click', function() {
            window.location.href = 'pass.php';
        });
        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        document.addEventListener('DOMContentLoaded', function() {
    const daysList = document.querySelector('.days');
    const daysInMonth = 31; // Assuming March has 31 days

    // Generate days dynamically
    for (let day = 1; day <= daysInMonth; day++) {
        const li = document.createElement('li');
        li.textContent = day;
        li.onclick = function() {
            showPopup(day);
        };
        daysList.appendChild(li);

        // Highlight March 16th and 17th
        if (day === 16 || day === 17) {
            li.classList.add('highlight');
        }
    }
});

function showPopup(day) {
    const popupId = `popup-${day}`;
    const popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = 'flex';
    }
}

function closePopup(popupId) {
    const popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = 'none';
    }
}
    </script>
</body>
</html>
