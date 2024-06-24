<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>About Us</title>
    <style>
        body {
                 font-family: "Rubik", sans-serif;
                    font-optical-sizing: auto;
                font-weight: <weight>;
                 font-style: normal;
            margin: 0;
            padding: 0;
            background-color: #3b2626;
           

                    
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .about-us-container {
            background-color: rgba(123, 129, 128, 0.727);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            max-width: 90%;
            margin-top:150px;
            animation: fadeIn 2s ease-in-out;
            overflow:hidden;
        }

        .about-us-content h1 {
            font-size: 2em;
            margin-bottom: 20px;
            animation: slideInFromLeft 1s ease-out;
        }
       

        .about-us-content p {
            font-size: 1em;
            line-height: 1.6;
            margin-bottom: 15px;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .founders-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin: 20px auto;
            gap: 20px;
        }

        .founder-box {
             background-color: rgba(123, 129, 128, 0.727);
            border: 2px solid transparent;
            
            border-image-slice: 1;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            width: 100%;
            max-width: 250px;
            animation: fadeIn 2s ease-in-out;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .founder-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .founder-box img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .founder-box h2 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .founder-box p {
            font-size: 0.9em;
            margin: 5px 0;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInFromLeft {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @media (min-width: 600px) {
            .about-us-content h1 {
                font-size: 2.5em;
            }

            .about-us-content p {
                font-size: 1.2em;
            }

            .founder-box h2 {
                font-size: 1.5em;
            }

            .founder-box p {
                font-size: 1em;
            }
        }

        @media (min-width: 768px) {
            .founders-container {
                gap: 40px;
            }

            .founder-box {
                max-width: 300px;
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
            margin:5px 0;
            
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
    <div class="about-us-container">
        <div class="about-us-content">
            <h1>MEDHA</h1>
            <p>
                
                “ Amrutvahini Sheti & Shikshan Vikas Santha is a premier institution in the educational field in Maharashtra. It efficiently and most qualitatively runs mainly technical and professional courses; and is well- known on the state and national level for its highest academic standard. This institution organises a grand cultural festival known as 'MEDHA' every year from 2016. Medha connotes intelligence. This is perhaps the second largest cultural festival in the state, the first being The Malhar Festival, Mumbai. The thought of organising such a grand festival on Amrutvahini was conceptualised by Rajwardhan Thorat; and it was successfully materialised by the Sanstha under the guidance of Mrs. Sharayu Deshmukh - Trustee of the Institution. ‘Medha’ provides an opportunity to the enthusiastic youth to showcase their hidden talents & skills. More than 10,000 students and nearly double number of parents whole heartedly enjoy this festival every year.
            </p>
        </div>
    </div>
    <h1>FOUNDERS</h1>

    <div class="founders-container">
        <div class="founder-box">
            <img src="Late._Shri._Bhausaheb_Santuji_Thorat.png" alt="Founder 1">
            <h2>Late. Shri. Bhausaheb Santuji Thorat</h2>
            <p>Founder, Amrutvahini Sheti and Shikshan Vikas Sanstha, Sangamner</p>
        </div>
        <div class="founder-box">
            <img src="Hon._Balasaheb_Thorat.png" alt="Founder 2">
            <h2>Hon. Balasaheb Thorat</h2>
            <p>Minister, Revenue, Energy & Education, Maharashtra State President, Maharashtra State Congress President , Amrutvahini Sheti & Shikshan Vikas Sanstha, Sangamner</p>
        </div>
        <div class="founder-box">
            <img src="Hon.Dr._Sudhir_Tambe.png" alt="Founder 3">
            <h2>Hon.Dr. Sudhir Tambe</h2>
            <p>Ex-Member of Legislative Council Maharashtra State Trustee, Amrutvahini Sheti & Shikshan Vikas Sanstha, Sangamner</p>
        </div>
        <div class="founder-box">
            <img src="Hon._Sharayu_Deshmukh (1).png" alt="Founder 4">
            <h2>FHon. Sharayu Deshmukh</h2>
            <p>Trustee, Amrutvahini Sheti & Shikshan Vikas Sanstha, Sangamner</p>
        </div>
        <div class="founder-box">
            <img src="Dr._Jayshree_Thorat.png" alt="Founder 5">
            <h2>Dr. Jayshree Thorat</h2>
            <p>Youth Leader , President EKVIRA FOUNDATION , Sangamner</p>
        </div>
        <!-- <div class="founder-box">
            <img src="Hon._Anil_Shinde.png" alt="Founder 6">
            <h2>FHon. Anil Shinde</h2>
            <p>Chief Executive Officer Amrutvahini Sheti & Shikshan Vikas Sanstha, Sangamner</p>
        </div> -->
        <div class="founder-box">
            <img src="Hon._Rajvardhan_Thorat (1).png" alt="Founder 7">
            <h2>Hon. Rajvardhan Thorat</h2>
            <p>Youth Leader</p>
        </div>
    </div>

    <script>

const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        document.addEventListener('DOMContentLoaded', (event) => {
            const aboutUsContent = document.querySelector('.about-us-content');
            
            aboutUsContent.addEventListener('mouseover', () => {
                aboutUsContent.style.transform = 'scale(1.05)';
                aboutUsContent.style.transition = 'transform 0.3s ease';
            });

            aboutUsContent.addEventListener('mouseout', () => {
                aboutUsContent.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>
