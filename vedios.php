<?php

// ================= VIDEO DATA =================
// مؤقتًا البيانات هنا
// بعدين هنجيب الفيديوهات من Database

$videos = [

    [
        "lesson" => "Lesson 01",
        "title" => "Introduction to Programming",
        "description" => "Learn the basics of programming and understand how computer programs work.",
        "video" => "https://www.youtube.com/embed/dQw4w9WgXcQ",
        "youtube" => "https://www.youtube.com/"
    ],

    [
        "lesson" => "Lesson 02",
        "title" => "HTML Basics",
        "description" => "Learn how to create web pages using HTML and understand HTML elements.",
        "video" => "https://www.youtube.com/embed/dQw4w9WgXcQ",
        "youtube" => "https://www.youtube.com/"
    ],

    [
        "lesson" => "Lesson 03",
        "title" => "CSS Fundamentals",
        "description" => "Learn how to style your website and create beautiful web pages.",
        "video" => "https://www.youtube.com/embed/dQw4w9WgXcQ",
        "youtube" => "https://www.youtube.com/"
    ],

    [
        "lesson" => "Lesson 04",
        "title" => "JavaScript Basics",
        "description" => "Learn JavaScript fundamentals and make your website interactive.",
        "video" => "https://www.youtube.com/embed/dQw4w9WgXcQ",
        "youtube" => "https://www.youtube.com/"
    ],

    [
        "lesson" => "Lesson 05",
        "title" => "JavaScript Functions",
        "description" => "Understand JavaScript functions, parameters and return values.",
        "video" => "https://www.youtube.com/embed/dQw4w9WgXcQ",
        "youtube" => "https://www.youtube.com/"
    ],

    [
        "lesson" => "Lesson 06",
        "title" => "Final Project",
        "description" => "Learn how to combine HTML, CSS and JavaScript in one project.",
        "video" => "https://www.youtube.com/embed/dQw4w9WgXcQ",
        "youtube" => "https://www.youtube.com/"
    ]

];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Educational Videos</title>


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
                0 4px 15px rgba(0,0,0,0.15);
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

            margin: 40px auto;
        }



        .page-title {

            text-align: center;

            margin-bottom: 40px;
        }


        .page-title h1 {

            font-size: 32px;

            color: #0b1f3a;

            margin-bottom: 10px;
        }


        .page-title p {

            color: #58718a;

            font-size: 16px;
        }



        .search-box {

            margin-bottom: 30px;

            display: flex;

            justify-content: center;
        }


        .search-box input {

            width: 500px;

            max-width: 100%;

            padding: 14px 18px;

            border: 2px solid #8ed8ff;

            border-radius: 10px;

            outline: none;

            font-size: 15px;
        }


        .search-box input:focus {

            border-color: #0b1f3a;
        }



        .videos-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }



        .video-card {

            background: white;

            border-radius: 15px;

            overflow: hidden;

            box-shadow:
                0 5px 20px
                rgba(0,0,0,0.08);

            transition: 0.3s;
        }


        .video-card:hover {

            transform: translateY(-7px);

            box-shadow:
                0 10px 30px
                rgba(0,0,0,0.15);
        }



        .video-container {

            width: 100%;

            height: 200px;

            background: #0b1f3a;
        }


        .video-container iframe {

            width: 100%;

            height: 100%;

            border: none;
        }



        .video-info {

            padding: 20px;
        }


        .video-number {

            display: inline-block;

            background: #8ed8ff;

            color: #0b1f3a;

            padding: 5px 10px;

            border-radius: 6px;

            font-size: 12px;

            font-weight: bold;

            margin-bottom: 10px;
        }


        .video-info h2 {

            font-size: 19px;

            margin-bottom: 10px;

            color: #0b1f3a;
        }


        .video-info p {

            color: #657c91;

            line-height: 1.5;

            font-size: 14px;
        }



        .watch-btn {

            display: block;

            margin-top: 15px;

            width: 100%;

            padding: 11px;

            background: #0b1f3a;

            color: white;

            border: none;

            border-radius: 8px;

            text-align: center;

            text-decoration: none;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;
        }


        .watch-btn:hover {

            background: #8ed8ff;

            color: #0b1f3a;
        }



        .no-results {

            text-align: center;

            width: 100%;

            padding: 40px;

            color: #58718a;

            display: none;
        }



        @media (max-width: 900px) {

            .videos-grid {

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


            .videos-grid {

                grid-template-columns: 1fr;
            }


            .page-title h1 {

                font-size: 26px;
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


        <a href="home.php" >
            Home
        </a>


        <a href="attendance.php">
            Attendance
        </a>


        <a href="grade.php">
            Grade
        </a>


        <a href="vedios.php" class="active">
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



<div class="container">


    <!-- PAGE TITLE -->

    <div class="page-title">

        <h1>
            🎓 Educational Videos
        </h1>

        <p>
            Watch the educational videos and improve your knowledge.
        </p>

    </div>







    <div
        class="videos-grid"
        id="videosGrid"
    >


        <?php foreach ($videos as $video): ?>


            <div class="video-card">


                <!-- Video -->

                <div class="video-container">

                    <iframe
                        src="<?php echo htmlspecialchars($video['video']); ?>"
                        allowfullscreen>
                    </iframe>

                </div>


                <!-- Video Information -->

                <div class="video-info">


                    <span class="video-number">

                        <?php
                        echo htmlspecialchars(
                            $video['lesson']
                        );
                        ?>

                    </span>


                    <h2>

                        <?php
                        echo htmlspecialchars(
                            $video['title']
                        );
                        ?>

                    </h2>


                    <p>

                        <?php
                        echo htmlspecialchars(
                            $video['description']
                        );
                        ?>

                    </p>


                    <a
                        href="<?php echo htmlspecialchars($video['youtube']); ?>"
                        target="_blank"
                        class="watch-btn"
                    >

                        ▶ Watch Video

                    </a>


                </div>


            </div>


        <?php endforeach; ?>


    </div>



    <!-- NO RESULTS -->

    <div
        class="no-results"
        id="noResults"
    >

        😔 No lessons found.

    </div>


</div>




<script>

function searchVideos() {

    const input =
        document
            .getElementById("searchInput")
            .value
            .toLowerCase();


    const cards =
        document.querySelectorAll(".video-card");


    let found = 0;


    cards.forEach(card => {

        const title =
            card
                .querySelector("h2")
                .textContent
                .toLowerCase();


        const description =
            card
                .querySelector("p")
                .textContent
                .toLowerCase();


        if (
            title.includes(input) ||
            description.includes(input)
        ) {

            card.style.display = "block";

            found++;

        } else {

            card.style.display = "none";

        }

    });


    const noResults =
        document.getElementById("noResults");


    if (found === 0) {

        noResults.style.display = "block";

    } else {

        noResults.style.display = "none";

    }

}

</script>


</body>

</html>
