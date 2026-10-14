<?php
// Home Page
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - Student Portal</title>


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

            max-width: 1200px;

            margin: auto;
        }



        .hero {
            margin-top: 40px;

            background: #0b1f3a;

            border-radius: 20px;

            padding: 50px;

            color: white;

            display: flex;

            justify-content: space-between;

            align-items: center;

            overflow: hidden;

            position: relative;
        }


        .hero-content {
            max-width: 650px;

            position: relative;

            z-index: 2;
        }


        .hero h1 {
            font-size: 42px;

            margin-bottom: 15px;
        }


        .hero h1 span {
            color: #8ed8ff;
        }


        .hero-btn {
            display: inline-block;

            background: #8ed8ff;

            color: #0b1f3a;

            text-decoration: none;

            padding: 13px 25px;

            border-radius: 9px;

            font-weight: bold;

            transition: 0.3s;
        }


        .hero-btn:hover {
            background: white;

            transform: translateY(-2px);
        }


        .hero-icon {
            font-size: 150px;

            opacity: 0.15;

            position: absolute;

            right: 50px;

            top: 10px;
        }



        .section-title {
            margin-top: 40px;

            margin-bottom: 20px;
        }


        .section-title h2 {
            font-size: 25px;
        }


        .section-title p {
            color: #607d98;

            margin-top: 5px;
        }



        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;
        }


        .stat-card {
            background: white;

            padding: 25px;

            border-radius: 15px;

            box-shadow:
                0 5px 20px
                rgba(0,0,0,0.07);

            transition: 0.3s;
        }


        .stat-card:hover {
            transform: translateY(-5px);
        }


        .stat-icon {
            width: 50px;

            height: 50px;

            border-radius: 10px;

            background: #eaf6ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 25px;

            margin-bottom: 15px;
        }


        .stat-card h3 {
            color: #607d98;

            font-size: 14px;

            margin-bottom: 8px;
        }


        .stat-card .number {
            font-size: 28px;

            font-weight: bold;

            color: #0b1f3a;
        }



        .quick-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;

            margin-bottom: 50px;
        }


        .quick-card {
            background: white;

            padding: 25px;

            border-radius: 15px;

            text-decoration: none;

            color: #0b1f3a;

            box-shadow:
                0 5px 20px
                rgba(0,0,0,0.07);

            transition: 0.3s;

            border: 2px solid transparent;
        }


        .quick-card:hover {
            transform: translateY(-5px);

            border-color: #8ed8ff;
        }


        .quick-card .icon {
            font-size: 35px;

            margin-bottom: 15px;
        }


        .quick-card h3 {
            margin-bottom: 8px;
        }


        .quick-card p {
            color: #607d98;

            font-size: 14px;

            line-height: 1.5;
        }


        .arrow {
            display: block;

            margin-top: 15px;

            color: #168ac1;

            font-weight: bold;
        }



        footer {
            background: #0b1f3a;

            color: white;

            text-align: center;

            padding: 20px;

            margin-top: 20px;
        }


        footer span {
            color: #8ed8ff;
        }



        @media (max-width: 950px) {

            .stats {
                grid-template-columns:
                    repeat(2, 1fr);
            }


            .quick-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 650px) {

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


            .hero {
                padding: 30px 25px;
            }


            .hero h1 {
                font-size: 30px;
            }


            .hero-icon {
                right: 15px;

                font-size: 100px;
            }


            .stats {
                grid-template-columns: 1fr;
            }


            .quick-grid {
                grid-template-columns: 1fr;
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


        <a href="home.php" class="active">
            Home
        </a>


        <a href="attendance.php">
            Attendance
        </a>


        <a href="grade.php">
            Grade
        </a>


        <a href="vedios.php">
            Videos
        </a>


    </div>


    <!-- Profile -->

    <a
        href="profile.php"
        class="profile-icon"
        title="Profile">

        👤

    </a>


</nav>




<main>


    <div class="container">



        <section class="hero">


            <div class="hero-content">


                <h1>

                    Welcome to
                    <span>We School</span>.

                </h1>


                <a
                    href="videos.php"
                    class="hero-btn">

                    🎓 Start Learning

                </a>


            </div>


            <div class="hero-icon">

                🎓

            </div>


        </section>




        <section>


            <div class="section-title">


                <h2>
                    📊 Your Overview
                </h2>


                <p>
                    Here's a quick look at your academic progress.
                </p>


            </div>



            <div class="stats">


                <!-- Attendance -->

                <div class="stat-card">


                    <div class="stat-icon">
                        📅
                    </div>


                    <h3>
                        Attendance
                    </h3>


                    <div
                        class="number"
                        id="attendancePercent">

                        100%

                    </div>


                </div>



                <!-- Grade -->

                <div class="stat-card">


                    <div class="stat-icon">
                        📝
                    </div>


                    <h3>
                        Current Grade
                    </h3>


                    <div
                        class="number"
                        id="currentGrade">

                        100

                    </div>


                </div>



                <!-- Videos -->

                <div class="stat-card">


                    <div class="stat-icon">
                        🎥
                    </div>


                    <h3>
                        Available Videos
                    </h3>


                    <div class="number">
                        6
                    </div>


                </div>



                <!-- Status -->

                <div class="stat-card">


                    <div class="stat-icon">
                        ⭐
                    </div>


                    <h3>
                        Student Status
                    </h3>


                    <div
                        class="number"
                        style="font-size:20px;">

                        Excellent

                    </div>


                </div>


            </div>


        </section>




        <section>


            <div class="section-title">


                <h2>
                    🚀 Quick Access
                </h2>


                <p>
                    Access your student services quickly.
                </p>


            </div>



            <div class="quick-grid">



                <a
                    href="attendance.php"
                    class="quick-card">


                    <div class="icon">
                        📅
                    </div>


                    <h3>
                        Attendance
                    </h3>


                    <p>

                        Check your attendance records
                        and view your attendance percentage.

                    </p>


                    <span class="arrow">

                        View Attendance →

                    </span>


                </a>




                <a
                    href="grades.php"
                    class="quick-card">


                    <div class="icon">
                        📊
                    </div>


                    <h3>
                        My Grades
                    </h3>


                    <p>

                        Check your grades and see how
                        your attendance affects your final grade.

                    </p>


                    <span class="arrow">

                        View Grades →

                    </span>


                </a>




                <a
                    href="videos.php"
                    class="quick-card">


                    <div class="icon">
                        🎥
                    </div>


                    <h3>
                        Educational Videos
                    </h3>


                    <p>

                        Watch lessons and educational
                        videos to improve your skills.

                    </p>


                    <span class="arrow">

                        Watch Videos →

                    </span>


                </a>


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




<script>



    const attendance =
        JSON.parse(
            localStorage.getItem(
                "attendance"
            )
        ) || {};




    const grades =
        JSON.parse(
            localStorage.getItem(
                "grades"
            )
        ) || {};




    const currentStudentId = 1;




    function calculateAttendance() {


        const records =
            attendance[
                currentStudentId
            ] || [];


        if (records.length === 0) {

            return 100;

        }


        const present =
            records.filter(
                record =>
                    record.status ===
                    "present"
            ).length;


        return Math.round(

            (present / records.length)
            * 100

        );

    }




    function calculateGrade() {


        const originalGrade =
            grades[
                currentStudentId
            ]?.originalGrade ?? 100;


        const attendancePercent =
            calculateAttendance();


        const absence =
            100 -
            attendancePercent;


        const penalty =
            Math.floor(
                absence / 10
            ) * 2;


        return Math.max(

            0,

            originalGrade -
            penalty

        );

    }




    document.getElementById(
        "attendancePercent"
    ).textContent =

        calculateAttendance()
        + "%";


    document.getElementById(
        "currentGrade"
    ).textContent =

        calculateGrade();


</script>


</body>

</html>
