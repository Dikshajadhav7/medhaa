<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memories Section Demo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #3b2626;
            padding: 20px;
        }

        .memories-container {
            max-width: 800px;
            margin: auto;
            margin-top: 100px;
        }

        .year-buttons {
            display: flex;
            gap:15px;
            justify-content: center;
            margin-bottom: 20px;
            
        }

        .year-buttons button {
            padding: 10px 20px;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            border: none;
            font-size:20px;
            cursor: pointer;
            height:70px;
            width:150px;
            
            transition: background-color 0.3s ease;
            border-radius:50px;
        }

        .year-buttons button:hover {
            background-color: #00eaffea;
        }

        .memories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            display: none; /* Initially hide all memories grids */
        }

        .memories-grid.active {
            display: grid; /* Display active memories grid */
        }

        .memories-item {
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .memories-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            vertical-align: middle;
        }

        .go-back {
            display: none;
            margin-top: 20px;
            text-align: center;
        }

        .go-back button {
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .go-back button:hover {
            background-color: #c82333;
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
    <div class="memories-container">
        <div class="year-buttons">
            <button onclick="showYear('2021')">2021</button>
            <button onclick="showYear('2022')">2022</button>
            <button onclick="showYear('2023')">2023</button>
        </div>

        <div id="memories2021" class="memories-grid">
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
        </div>

        <div id="memories2022" class="memories-grid">
            <div class="memories-item">
                <img src="g3.jpg" alt="Memory 4">
            </div>
            <div class="memories-item">
                <img src="g4.jpg" alt="Memory 5">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            
        </div>

        <div id="memories2023" class="memories-grid">
            <div class="memories-item">
                <img src="g3.jpg" alt="Memory 4">
            </div>
            <div class="memories-item">
                <img src="g4.jpg" alt="Memory 5">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
            <div class="memories-item">
                <img src="g6.jpg" alt="Memory 1">
            </div>
            <div class="memories-item">
                <img src="g1.jpg" alt="Memory 2">
            </div>
            <div class="memories-item">
                <img src="g2.jpg" alt="Memory 3">
            </div>
        </div>

        <div class="go-back">
            <button onclick="goBack()">Go Back</button>
        </div>
    </div>

    <script>

const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        function showYear(year) {
            const yearSections = document.querySelectorAll('.memories-grid');
            yearSections.forEach(section => {
                section.classList.remove('active'); // Hide all memories grids
            });

            const selectedYear = document.getElementById(`memories${year}`);
            selectedYear.classList.add('active'); // Show memories grid for selected year

            document.querySelector('.year-buttons').style.display = 'none'; // Hide year buttons
            document.querySelector('.go-back').style.display = 'block'; // Show go back button
        }

        function goBack() {
            const yearSections = document.querySelectorAll('.memories-grid');
            yearSections.forEach(section => {
                section.classList.remove('active'); // Hide all memories grids
            });

            document.querySelector('.year-buttons').style.display = 'flex'; // Show year buttons
            document.querySelector('.go-back').style.display = 'none'; // Hide go back button
        }
    </script>
</body>
</html>
