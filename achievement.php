<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>College Cultural Fest Winners</title>
    <style>
        body {
                 font-family: "Rubik", sans-serif;
                font-optical-sizing: auto;
                font-weight: <weight>;
                font-style: normal;
            margin: 0;
            padding: 0;
            background-color: #3b2626;
           
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            margin-top:100px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }
        
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            margin: 0 5px;
            background-color: #ddd;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .tab:hover {
            background-color: #bbb;
        }

        .tab.active {
            background-color: #cec5c5;
            color: #fff;
        }

        .content {
            display: none;
        }

        .content.active {
            display: block;
        }

        .contest {
            background-color: #fff;
            margin: 10px 0;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            animation: fadeIn 0.5s;
        }
        
        .contest h3 {
            margin-top: 0;
            color: #555;
            cursor: pointer;
        }
        
        .winners {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        
        .winner {
            flex: 1 1 30%;
            margin: 10px;
            text-align: center;
            transform: scale(0);
            animation: popIn 0.5s forwards;
            animation-delay: 0.5s;
        }
        
        .winner img {
            max-width: 100%;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        
        @media (max-width: 768px) {
            .winner {
                flex: 1 1 45%;
            }
        }
        
        @media (max-width: 480px) {
            .winner {
                flex: 1 1 100%;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes popIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
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
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="aboutus.php" class="nav-link">About Us</a></li>
            <li><a href="team.php" class="nav-link">Teams</a></li>
            <li><a href="memories.php" class="nav-link">Memories</a></li>
            <li><a href="achievement.php" class="nav-link">Achievements</a></li>
            <li><a href="events.php" class="nav-link">Events</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>MEDHA 2K24 Winners</h1>
        <div class="tabs">
            <div class="tab" data-target="groupA">Group A</div>
            <div class="tab" data-target="groupB">Group B</div>
            <div class="tab" data-target="groupC">Group C</div>
        </div>
        <div class="content" id="groupA">
            <details class="contest">
                <summary><h3>Dance Competition</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="adancewinner.jpg" alt="Winner 1">
                        <h1>star group</h1>
                    </div>
                    <div class="winner">
                        <img src="adancewinner2.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="adancewinner3.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
            <details class="contest">
                <summary><h3>Singing Competition</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="asing.jpg" alt="Winner 1">
                    </div>
                    <div class="winner">
                        <img src="asing1.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="asing2.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
            <details class="contest">
                <summary><h3>fashion show</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="afashionshow.jpg" alt="Winner 1">
                        <h1>rutvik & soham</h1>
                    </div>
                    <div class="winner">
                        <img src="afashionshow1.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="afashionshow3.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
        </div>
        <div class="content" id="groupB">
            <details class="contest">
            <summary><h3>Dance Competition</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="adancewinner.jpg" alt="Winner 1">
                        <h1>star group</h1>
                    </div>
                    <div class="winner">
                        <img src="adancewinner2.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="adancewinner3.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
            <details class="contest">
            <summary><h3>Singing Competition</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="asing.jpg" alt="Winner 1">
                    </div>
                    <div class="winner">
                        <img src="asing1.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="asing2.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
            <details class="contest">
            <summary><h3>fashion show</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="afashionshow.jpg" alt="Winner 1">
                        <h1>rutvik & soham</h1>
                    </div>
                    <div class="winner">
                        <img src="afashionshow1.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="afashionshow3.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
        </div>
        <div class="content" id="groupC">
            <details class="contest">
                <summary><h3>Debate Competition</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="winner19.jpg" alt="Winner 1">
                    </div>
                    <div class="winner">
                        <img src="winner20.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="winner21.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
            <details class="contest">
                <summary><h3>Cooking Contest</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="winner22.jpg" alt="Winner 1">
                    </div>
                    <div class="winner">
                        <img src="winner23.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="winner24.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
            <details class="contest">
                <summary><h3>Fashion Show</h3></summary>
                <div class="winners">
                    <div class="winner">
                        <img src="winner25.jpg" alt="Winner 1">
                    </div>
                    <div class="winner">
                        <img src="winner26.jpg" alt="Winner 2">
                    </div>
                    <div class="winner">
                        <img src="winner27.jpg" alt="Winner 3">
                    </div>
                </div>
            </details>
        </div>
    </div>

    <script>
const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab');
            const contents = document.querySelectorAll('.content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = tab.getAttribute('data-target');

                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');

                    contents.forEach(content => {
                        if (content.id === target) {
                            content.classList.add('active');
                        } else {
                            content.classList.remove('active');
                        }
                    });
                });
            });

            // Set the first tab and content as active by default
            tabs[0].classList.add('active');
            contents[0].classList.add('active');
        });
    </script>
</body>
</html>
