<?php

    include "submit_form.php";

    include "submit_game_participation.php";
    // include "submit_contest_participation.php";

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Event Page</title>
    <style>
        body {
            font-family: "Rubik", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            margin-top:70px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            background-color: white;
            font-size: 36px;
            margin-top:20px;
            color: #0a1a4a;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 100%;
            max-width: 1600px;
            padding: 20px;
            box-sizing: border-box;
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background-color: rgb(67, 47, 47);
        }

        .box {
            width: calc(25% - 20px);
            margin: 10px;
            background-color: rgb(255, 255, 255);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            text-align: center;
        }
        .box:hover{
            transform: translateY(-10px);
        }

        .box img {
            max-width: 100%;
            max-height: 50%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .box h2 {
            margin: 10px 0;
            font-size: 24px;
        }

        .box p {
            font-size: 16px;
            margin: 10px 0;
        }

        .box button {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #btn{
                height: 30px;
                width:100px;
                margin-left:130px;
                font-size: 10px;
                background-color:transparent;
                color: rgb(0, 0, 0);
        }
        .box button:hover {
            background-color: #0056b3;
        }

        .form-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 80%;
            overflow: auto;
        }

        .form-box h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
        }

        .form-box label {
            display: block;
            margin-bottom: 10px;
        }

        .form-box input[type="text"],
        .form-box input[type="tel"],
        .form-box input[type="email"],
        .form-box select,
        .form-box select{
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-box textarea {
            resize: vertical;
        }

        .form-box button {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-box button:hover {
            background-color: #0056b3;
        }
        /*new form css*/
        .form-container1 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;;
            justify-content: center;
            align-items: center;
        }

        .form-box1 {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 80%;
            overflow: auto;
        }

        .form-box1 h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
        }

        .form-box1 label {
            display: block;
            margin-bottom: 10px;
        }

        .form-box1 input[type="text"],
        .form-box1 input[type="tel"],
        .form-box1 input[type="email"],
        .form-box1 select,
        .form-box1 select{
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-box1 textarea {
            resize: vertical;
        }

        .form-box1 button {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-box1 button:hover {
            background-color: #0056b3;
        }
         /*new form for medha cup*/
         .form-container2 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index:1000;
            justify-content: center;
            align-items: center;
        }

        .form-box2 {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 80%;
            overflow: auto;
        }

        .form-box2 h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
        }

        .form-box2 label {
            display: block;
            margin-bottom: 10px;
        }

        .form-box2 input[type="text"],
        .form-box2 input[type="tel"],
        .form-box2 input[type="email"],
        .form-box2 input[type="number"]
        .form-box2 select{
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-box2 textarea {
            resize: vertical;
        }

        .form-box2 button {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-box2 button:hover {
            background-color: #0056b3;
        }
        @media screen and (max-width: 1200px) {
            .box {
                width: calc(33.33% - 20px);
            }
        }

        @media screen and (max-width: 768px) {
            .box {
                width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 480px) {
            .box {
                width: 100%;
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
        <div class="header">
        <h1>MEDHA EVENTS</h1>
    </div>
    
    <div class="container">
        <div class="box">
            <img src="trophy.png" alt="Event 1">
            <p>MEDHA CUP</p>
            <button onclick="openForm2('medha cup')">Participate</button> 
            
        </div>
        <div class="box">
            <img src="dance.png" alt="Event 2">
        
            <p>DANCE</p>
            <button onclick="openForm('dance')">Participate</button>
        </div>
        <div class="box">
            <img src="stand-up-comedy.png" alt="Event 3">
         
            <p>STAND-UP-COMEDY</p>
            <button onclick="openForm('stand-up-comedy')">Participate</button>
        </div>
        <div class="box">
            <img src="show.png" alt="Event 4">
            
            <p>FASHION SHOW</p>
            <button onclick="openForm('fashion show')">Participate</button>
        </div>
        <div class="box">
            <img src="chess.png" alt="Event 5">
            
            <p>INDOOR GAMES</p>
            <button onclick="openForm1('indoor games')">Participate</button>
        </div>
        <div class="box">
            <img src="cricket.png" alt="Event 6">
            
            <p>OUTDOOR GAMES</p>
            <button onclick="openForm1('outdoor games')">Participate</button>
        </div>
        <div class="box">
            <img src="debate.png" alt="Event 7">
            
            <p>DEBATE</p>
            <button onclick="openForm('debate')">Participate</button>
        </div>
        <div class="box">
            <img src="gaming.png" alt="Event 8">
           
            <p>GAIMING</p>
            <button onclick="openForm('gaiming')">Participate</button>
        </div>
        <div class="box">
            <img src="guitar.png" alt="Event 9">
            
            <p>INSTRUMENTAL PLAYING.</p>
            <button onclick="openForm('guitar')">Participate</button>
        </div>
        <div class="box">
            <img src="singing.png" alt="Event 10">
            
            <p>SINGING.</p>
            <button onclick="openForm('singing')">Participate</button>
        </div>
        <div class="box">
            <img src="technical-drawing.png" alt="Event 11">
            
            <p>TECHNICAL PROJECT</p>
            <button onclick="openForm('technical project')">Participate</button>
        </div>
        <div class="box">
            <img src="stage.png" alt="Event 13">
            
            <p>DRAMA</p>
            <button onclick="openForm('drama')">Participate</button>
        </div>
        <div class="box">
            <img src="dhol.png" alt="Event 14">
            
            <p>DHOL PATHAK</p>
            <button onclick="openForm('dhol pathak')">Participate</button>
        </div>
        <div class="box">
            <img src="paint-palette.png" alt="Event 15">
            
            <p>SPOT PAINTING</p>
            <button onclick="openForm('painting')">Participate</button>
        </div>
        <div class="box">
            <img src="logo-design.png" alt="Event 16">
            
            <p>LOGO DESIGN.</p>
            <button onclick="openForm('logo design')">Participate</button>
        </div>
        <div class="box">
            <img src="meeting.png" alt="Event 12">
           
            <p>GROUP DISSCUTION.</p>
            <button onclick="openForm('group disccusion')">Participate</button>
        </div>
        <!-- Add more boxes as needed -->
    </div>
<!-- Form for participating in contests -->
<div class="form-container" id="formContainer">
    <div class="form-box">
        <h2>Participate in <span id="contestName"></span></h2>
        <form action="submit_contest_participation.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="group">Select Group:</label>
            <select id="group" name="group" required>
                <option value="Group A">Group A</option>
                <option value="Group B">Group B</option>
                <option value="Group C">Group C</option>
                <option value="Group D">Group D</option>
            </select>

            <label for="institute">Select Institute:</label>
            <select id="institute" name="institute" required>
                <option value="Amruthvahini junior college">Amruthvahini junior college</option>
                <option value="Amruthvahini college of engineering">Amruthvahini college of engineering</option>
                <option value="Amruthvahini polytechnic">Amruthvahini polytechnic</option>
                <option value="Amruthvahini college of pharmacy">Amruthvahini college of pharmacy</option>
                <option value="Amruthvahini institute of MBA">Amruthvahini institute of MBA</option>
            </select>

            <label for="contest">Contest:</label>
            <select id="contest" name="contest" required>
                <option value="dance">Dance</option>
                <option value="stand-up-comedy">Stand-up Comedy</option>
                <option value="fashion show">Fashion Show</option>
                <option value="debate">Debate</option>
            </select>

            <button type="submit">Submit</button>
            <button type="button" onclick="closeForm()">Close</button>
        </form>
    </div>
</div>

    <!-- Form for participating in games -->
<div class="form-container1" id="formContainer1">
    <div class="form-box1">
        <h2>Participate in <span id="contestName1"></span></h2>
        <form method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="group">Select Group:</label>
            <select id="group" name="group" required>
                <option value="Group A">Group A</option>
                <option value="Group B">Group B</option>
                <option value="Group C">Group C</option>
                <option value="Group D">Group D</option>
            </select>

            <label for="institute">Select Institute:</label>
            <select id="institute" name="institute" required>
                <option value="Amruthvahini junior college">Amruthvahini junior college</option>
                <option value="Amruthvahini college of engineering">Amruthvahini college of engineering</option>
                <option value="Amruthvahini polytechnic">Amruthvahini polytechnic</option>
                <option value="Amruthvahini college of pharmacy">Amruthvahini college of pharmacy</option>
                <option value="Amruthvahini mba">Amruthvahini mba</option>
            </select>

            <label for="game">Select Game:</label>
            <select id="game" name="game" required>
                <option value="kabbadi">Kabbadi</option>
                <option value="kho-kho">Kho-Kho</option>
                <option value="chess">Chess</option>
                <option value="cricket">Cricket</option>
            </select>

            <button type="submit" action="submit_game_participation.php" >Submit</button>
            <button type="button" onclick="closeForm1()">Close</button>
        </form>
    </div>
</div>

 <!--form for the medha-->
 <div class="form-container2" id="formContainer2">
    <div class="form-box2">
        <h2>register for <span id="contestName2"></span></h2>
        <form action="submit_form.php" method="POST">
            <label for="name">Group Leader Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label>Number of Group Members:</label>
            <input type="number" id="num" name="num" required>

            <label for="group">Select Group:</label>
            <select id="group" name="group" required>
                <option value="Group A">Group A (less than 17)</option>
                <option value="Group B">Group B (greater than 17)</option>
            </select>
            <br><br>

            <button type="submit">Submit</button>
            <button type="button" onclick="closeForm2()">Close</button>
        </form>
    </div>
</div>


    <script>

        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        function openForm(contestName) {
            document.getElementById('contestName').textContent = contestName;
            document.getElementById('formContainer').style.display = 'flex';
        }

        function closeForm() {
            document.getElementById('formContainer').style.display = 'none';
        }

        function submitForm() {
            // Example: Getting form values
            var name = document.getElementById('name').value;
            var mobile = document.getElementById('mobile').value;
            var email = document.getElementById('email').value;
            var group = document.getElementById('group').value;
            var institute = document.getElementById('institute').value;
            var message = document.getElementById('contest').value;

            // Example: Validation (you can add your own validation logic)
            if (name.trim() === '' || mobile.trim() === '' || email.trim() === '' || group === '' || institute === '') {
                alert('Please fill out all required fields.');
                return;
            }

            // Example: Form submission (you can replace this with your own submission logic)
            var formData = {
                name: name,
                mobile: mobile,
                email: email,
                group: group,
                institute: institute,
                contest:contest
            };

            console.log('Form Data:', formData);
            alert('Form submitted successfully!');
            closeForm(); // Close the form after submission
        }
        /*new form*/

        function openForm1(contestName) {
            document.getElementById('contestName1').textContent = contestName;
            document.getElementById('formContainer1').style.display = 'flex';
        }

        function closeForm1() {
            document.getElementById('formContainer1').style.display = 'none';
        }

        function submitForm1() {
            // Example: Getting form values
            var name = document.getElementById('name').value;
            var mobile = document.getElementById('mobile').value;
            var email = document.getElementById('email').value;
            var group = document.getElementById('group').value;
            var institute = document.getElementById('institute').value;
            var message = document.getElementById('game').value;

            // Example: Validation (you can add your own validation logic)
            if (name.trim() === '' || mobile.trim() === '' || email.trim() === '' || group === '' || institute === '') {
                alert('Please fill out all required fields.');
                return;
            }

            // Example: Form submission (you can replace this with your own submission logic)
            var formData = {
                name: name,
                mobile: mobile,
                email: email,
                group: group,
                institute: institute,
                game:game,
            };

            console.log('Form Data:', formData);
            alert('Form submitted successfully!');
            closeForm1(); // Close the form after submission
        }
        /*form for medha cup*/
        function openForm2(contestName) {
            document.getElementById('contestName2').textContent = contestName;
            document.getElementById('formContainer2').style.display = 'flex';
        }

        function closeForm2() {
            document.getElementById('formContainer2').style.display = 'none';
        }

        function submitForm2() {
            // Example: Getting form values
            var name = document.getElementById('name').value;
            var mobile = document.getElementById('mobile').value;
            var email = document.getElementById('email').value;
            var num = document.getElementById('num').value;
            var group = document.getElementById('group').value;
           

            // Example: Validation (you can add your own validation logic)
            if (name.trim() === '' || mobile.trim() === '' || email.trim() === '' || group === '' || institute === '') {
                alert('Please fill out all required fields.');
                return;
            }

            // Example: Form submission (you can replace this with your own submission logic)
            var formData = {
                name: name,
                mobile: mobile,
                email: email,
                group: group,
                num:num,
                
            };

            console.log('Form Data:', formData);
            alert('Form submitted successfully!');
            closeForm2(); // Close the form after submission
        }



    </script>
</body>
</html>
