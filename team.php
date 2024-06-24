<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3b2626;
            margin: 0;
            padding: 0;
        }

        .team-section {
            text-align: center;
            padding: 50px 20px;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #ffffff;
            margin-top:50px;
        }

        .team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .team-member {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 200px;
            text-align: center;
            transform: scale(1);
            transition: transform 0.3s ease;
            animation: fadeIn 1s ease;
        }

        .team-member:hover {
            transform: scale(1.05);
        }

        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .team-member h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #007BFF;
        }

        .team-member p {
            font-size: 1em;
            color: #777;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
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
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="aboutus.php" class="nav-link">About Us</a></li>
            <li><a href="team.php" class="nav-link">Teams</a></li>
            <li><a href="memories.php" class="nav-link">Memories</a></li>
            <li><a href="achievement.php" class="nav-link">Achievements</a></li>
            <li><a href="events.php" class="nav-link">Events</a></li>
        </ul>
        
    </nav>
    <section class="team-section">
        <h1>Our Core Committee</h1>
        <div class="team-container">
            <div class="team-member">
                <img src="Ishwari_Vikhe.png" alt="Alice Johnson's photo">
                <h2>Ishwari Vikhe</h2>
                <p>Amrutvahini Model School & Junior Colleg</p>
            </div>
            <div class="team-member">
                <img src="Vaishnavi_Paradhi.png" alt="Bob Smith's photo">
                <h2>Vaishnavi Paradhi</h2>
                <p>Amrutvahini Model School & Junior Colleg</p>
            </div>
            <div class="team-member">
                <img src="Prithviraj_Nehe.png" alt="Charlie Brown's photo">
                <h2>Prithviraj Nehe</h2>
                <p>Amrutvahini Nido International Schoo</p>
            </div>
            <div class="team-member">
                <img src="Diksha_Jadhav.png" alt="Diana Ross's photo">
                <h2>Diksha Jadhav</h2>
                <p>Amrutvahini Polytechnic</p>
            </div>
            <div class="team-member">
                <img src="Yash_Malave.png" alt="Evan Wright's photo">
                <h2>Yash Malave</h2>
                <p>Amrutvahini College of Pharmacy</p>
            </div>
            <div class="team-member">
                <img src="Apurva_Barve.png" alt="Fiona Green's photo">
                <h2>Apurva Barve</h2>
                <p>Amrutvahini Institute of management and Business Administration</p>
            </div>
            <div class="team-member">
                <img src="Ayesha_Hakim.png" alt="George Harris's photo">
                <h2>Ayesha Hakim</h2>
                <p>Amrutvahini College of Engineering</p>
            </div>
            <div class="team-member">
                <img src="Ritesh_Gaikwad.png" alt="Hannah Lee's photo">
                <h2>Ritesh Gaikwad</h2>
                <p>Amrutvahini College of Engineering</p>
            </div>
        </div>
    </section>

    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>
</body>
</html>


