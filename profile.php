<?php
// Profile Page
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Profile - Student Portal</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        body {
            background: #eaf6ff;
            color: #0b1f3a;
        }



        .navbar {
            width: 100%;
            min-height: 75px;

            background: #0b1f3a;

            display: flex;
            align-items: center;

            padding: 0 40px;

            position: sticky;
            top: 0;

            z-index: 1000;

            box-shadow:
                0 4px 15px
                rgba(0,0,0,0.15);
        }


        .logo {
            color: white;

            font-size: 24px;

            font-weight: bold;

            margin-right: 50px;
        }


        .nav-links {
            display: flex;

            align-items: center;

            gap: 10px;
        }


        .nav-links a {
            color: white;

            text-decoration: none;

            padding: 10px 16px;

            border-radius: 8px;

            transition: 0.3s;
        }


        .nav-links a:hover,
        .nav-links a.active {
            background: #8ed8ff;

            color: #0b1f3a;
        }



        .profile-icon {
            margin-left: auto;

            width: 45px;
            height: 45px;

            border-radius: 50%;

            background: #8ed8ff;

            display: flex;

            align-items: center;
            justify-content: center;

            text-decoration: none;

            font-size: 22px;

            transition: 0.3s;
        }


        .profile-icon:hover {
            background: white;

            transform: scale(1.1);
        }



        .container {
            width: 90%;

            max-width: 1100px;

            margin: auto;
        }



        .page-title {
            margin-top: 40px;

            margin-bottom: 25px;
        }


        .page-title h1 {
            font-size: 30px;

            margin-bottom: 7px;
        }


        .page-title p {
            color: #607d98;
        }



        .profile-hero {
            background: #0b1f3a;

            border-radius: 20px;

            padding: 35px;

            color: white;

            display: flex;

            align-items: center;

            gap: 30px;

            position: relative;

            overflow: hidden;

            box-shadow:
                0 7px 25px
                rgba(11,31,58,0.15);
        }


        .profile-hero::after {
            content: "";

            width: 250px;
            height: 250px;

            background: #8ed8ff;

            opacity: 0.08;

            border-radius: 50%;

            position: absolute;

            right: -70px;
            top: -100px;
        }


        .profile-image {
            width: 125px;
            height: 125px;

            border-radius: 50%;

            object-fit: cover;

            border: 5px solid #8ed8ff;

            position: relative;

            z-index: 2;
        }


        .profile-info {
            position: relative;

            z-index: 2;
        }


        .profile-info h2 {
            font-size: 30px;

            margin-bottom: 8px;
        }


        .profile-info p {
            color: #bcd7e8;

            margin-bottom: 12px;
        }


        .student-badge {
            display: inline-block;

            background: #8ed8ff;

            color: #0b1f3a;

            padding: 7px 15px;

            border-radius: 20px;

            font-size: 13px;

            font-weight: bold;
        }


        /* ================= SECTION ================= */

        .section {
            margin-top: 35px;
        }


        .section-title {
            margin-bottom: 18px;
        }


        .section-title h2 {
            font-size: 23px;
        }


        .section-title p {
            color: #607d98;

            margin-top: 5px;

            font-size: 14px;
        }



        .info-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 18px;
        }


        .info-card {
            background: white;

            padding: 22px;

            border-radius: 15px;

            box-shadow:
                0 5px 20px
                rgba(0,0,0,0.07);

            display: flex;

            align-items: center;

            gap: 15px;

            transition: 0.3s;

            border: 2px solid transparent;
        }


        .info-card:hover {
            transform: translateY(-4px);

            border-color: #8ed8ff;
        }


        .info-icon {
            width: 48px;
            height: 48px;

            border-radius: 10px;

            background: #eaf6ff;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 22px;

            flex-shrink: 0;
        }


        .info-text small {
            display: block;

            color: #607d98;

            font-size: 12px;

            margin-bottom: 5px;
        }


        .info-text strong {
            color: #0b1f3a;

            font-size: 15px;
        }



        .stats {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;

            margin-bottom: 50px;
        }


        .stat-card {
            background: white;

            padding: 25px;

            border-radius: 15px;

            box-shadow:
                0 5px 20px
                rgba(0,0,0,0.07);

            text-align: center;

            transition: 0.3s;
        }


        .stat-card:hover {
            transform: translateY(-5px);
        }


        .stat-icon {
            width: 50px;
            height: 50px;

            margin: 0 auto 12px;

            border-radius: 12px;

            background: #eaf6ff;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 24px;
        }


        .stat-card h3 {
            color: #607d98;

            font-size: 13px;

            margin-bottom: 8px;
        }


        .stat-number {
            font-size: 25px;

            font-weight: bold;

            color: #0b1f3a;
        }



        footer {
            background: #0b1f3a;

            color: white;

            text-align: center;

            padding: 20px;
        }


        footer span {
            color: #8ed8ff;
        }



        @media (max-width: 800px) {

            .navbar {
                padding: 10px 20px;

                flex-wrap: wrap;
            }


            .logo {
                font-size: 20px;

                margin-right: auto;
            }


            .nav-links {
                width: 100%;

                justify-content: center;

                flex-wrap: wrap;

                margin-top: 10px;
            }


            .nav-links a {
                font-size: 13px;

                padding: 8px 10px;
            }


            .profile-icon {
                margin-left: 15px;
            }


            .profile-hero {
                padding: 25px;

                flex-direction: column;

                text-align: center;
            }


            .info-grid {
                grid-template-columns: 1fr;
            }


            .stats {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 500px) {

            .container {
                width: 92%;
            }


            .profile-info h2 {
                font-size: 25px;
            }


            .page-title h1 {
                font-size: 25px;
            }

        }

    </style>

</head>


<body>



<nav class="navbar">


    <div class="logo">
        Student Portal
    </div>


    <div class="nav-links">

        <a href="login.php">
            Login
        </a>

        <a href="home.php">
            Home
        </a>

        <a href="attendance.php">
            Attendance
        </a>

        <a href="grade.php">
            Grade
        </a>

        <a href="videos.php">
            Videos
        </a>

    </div>


    <a
        href="profile.php"
        class="profile-icon active"
        title="Profile"
    >
        👤
    </a>


</nav>




<main>

    <div class="container">


        <!-- PAGE TITLE -->

        <div class="page-title">

            <h1>
                👤 My Profile
            </h1>

            <p>
                Manage and view your personal information.
            </p>

        </div>




        <section class="profile-hero">


            <img
                src="esraa.jpeg"
                class="profile-image"
                alt="Student Profile"
            >


            <div class="profile-info">

                <h2>
                    Esraa Hassan
                </h2>

                <p>
                    Welcome back to your student profile.
                </p>

                <span class="student-badge">
                    🎓 Student
                </span>

            </div>


        </section>




        <section class="section">


            <div class="section-title">

                <h2>
                    📋 Personal Information
                </h2>

                <p>
                    Your registered personal information.
                </p>

            </div>


            <div class="info-grid">


                <div class="info-card">

                    <div class="info-icon">
                        🆔
                    </div>

                    <div class="info-text">

                        <small>
                            Student ID
                        </small>

                        <strong>
                            2026001
                        </strong>

                    </div>

                </div>


                <div class="info-card">

                    <div class="info-icon">
                        📧
                    </div>

                    <div class="info-text">

                        <small>
                            Email Address
                        </small>

                        <strong>
                            ahmed@example.com
                        </strong>

                    </div>

                </div>


                <div class="info-card">

                    <div class="info-icon">
                        📱
                    </div>

                    <div class="info-text">

                        <small>
                            Phone Number
                        </small>

                        <strong>
                            01000000000
                        </strong>

                    </div>

                </div>


                <div class="info-card">

                    <div class="info-icon">
                        💻
                    </div>

                    <div class="info-text">

                        <small>
                            Department
                        </small>

                        <strong>
                            Programming
                        </strong>

                    </div>

                </div>


                <div class="info-card">

                    <div class="info-icon">
                        🎓
                    </div>

                    <div class="info-text">

                        <small>
                            Class
                        </small>

                        <strong>
                            Third Year
                        </strong>

                    </div>

                </div>


                <div class="info-card">

                    <div class="info-icon">
                        ⭐
                    </div>

                    <div class="info-text">

                        <small>
                            Student Status
                        </small>

                        <strong>
                            Excellent
                        </strong>

                    </div>

                </div>


            </div>


        </section>




        <section class="section">


            <div class="section-title">

                <h2>
                    📊 Academic Overview
                </h2>

                <p>
                    A quick look at your current performance.
                </p>

            </div>


            <div class="stats">


                <div class="stat-card">

                    <div class="stat-icon">
                        📅
                    </div>

                    <h3>
                        Attendance
                    </h3>

                    <div class="stat-number">
                        100%
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        📝
                    </div>

                    <h3>
                        Current Grade
                    </h3>

                    <div class="stat-number">
                        100
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-icon">
                        🎥
                    </div>

                    <h3>
                        Videos Watched
                    </h3>

                    <div class="stat-number">
                        6
                    </div>

                </div>


            </div>


        </section>


    </div>

</main>




<footer>

    <p>

        © 2026

        <span>
            Student Portal
        </span>

        — All Rights Reserved

    </p>

</footer>


</body>

</html>