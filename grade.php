<?php
// Grades Page
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Grades</title>


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
                rgba(0, 0, 0, 0.15);
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

            font-size: 15px;

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

            margin: 40px auto;
        }



        .title {
            margin-bottom: 25px;
        }


        .title h2 {
            font-size: 28px;
        }


        .title p {
            color: #54708d;

            margin-top: 8px;
        }



        .table-container {
            background: white;

            padding: 25px;

            border-radius: 15px;

            box-shadow:
                0 5px 20px
                rgba(0,0,0,0.08);

            overflow-x: auto;
        }


        table {
            width: 100%;

            border-collapse: collapse;
        }


        th {
            background: #0b1f3a;

            color: white;

            padding: 15px;
        }


        td {
            padding: 14px;

            text-align: center;

            border-bottom:
                1px solid #d8eef9;
        }


        tr:hover {
            background: #f1faff;
        }


        .student-name {
            text-align: left;

            font-weight: bold;
        }



        input {
            width: 80px;

            padding: 8px;

            border:
                2px solid #8ed8ff;

            border-radius: 7px;

            text-align: center;

            font-size: 15px;
        }


        input:focus {
            outline: none;

            border-color: #168ac1;
        }



        .attendance-good {
            color: #178538;

            font-weight: bold;
        }


        .attendance-bad {
            color: #d62828;

            font-weight: bold;
        }



        .final-grade {
            background: #dff5ff;

            font-weight: bold;

            color: #0b1f3a;
        }



        .save-btn {
            margin-top: 25px;

            width: 100%;

            padding: 15px;

            border: none;

            border-radius: 10px;

            background: #8ed8ff;

            color: #0b1f3a;

            font-size: 18px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;
        }


        .save-btn:hover {
            background: #5fc5f5;
        }



        .info {
            margin-top: 25px;

            background: #0b1f3a;

            color: white;

            padding: 20px;

            border-radius: 12px;
        }


        .info span {
            color: #8ed8ff;

            font-weight: bold;
        }



        @media (max-width: 768px) {

            .navbar {
                padding: 10px 20px;

                height: auto;

                flex-wrap: wrap;
            }


            .logo {
                margin-right: auto;

                font-size: 20px;
            }


            .profile-icon {
                margin-left: 15px;
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


            .container {
                width: 95%;
            }


            .title h2 {
                font-size: 24px;
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


        <a href="grade.php" class="active">
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



        <div class="title">


            <h2>
                📊 Student Grades
            </h2>


            <p>
                Grades are automatically affected by attendance.
            </p>


        </div>




        <div class="table-container">


            <table>


                <thead>

                    <tr>

                        <th>
                            #
                        </th>

                        <th>
                            Student Name
                        </th>

                        <th>
                            Attendance
                        </th>

                        <th>
                            Original Grade
                        </th>

                        <th>
                            Absence Penalty
                        </th>

                        <th>
                            Final Grade
                        </th>

                    </tr>

                </thead>


                <tbody id="gradesTable">

                </tbody>


            </table>



            <button
                class="save-btn"
                onclick="saveGrades()">

                💾 Save Grades

            </button>


        </div>




        <div class="info">

            <p>

                📌

                <span>
                    Penalty Rule:
                </span>

                Every 10% absence reduces
                2 points from the final grade.

            </p>

        </div>


    </div>


</main>




<script>



    const students = [

        {
            id: 1,
            name: "Ahmed Mohamed"
        },

        {
            id: 2,
            name: "Omar Ali"
        },

        {
            id: 3,
            name: "Youssef Hassan"
        },

        {
            id: 4,
            name: "Mohamed Ibrahim"
        },

        {
            id: 5,
            name: "Khaled Mahmoud"
        },

        {
            id: 6,
            name: "Adam Mostafa"
        },

        {
            id: 7,
            name: "Ali Samir"
        },

        {
            id: 8,
            name: "Mariam Ahmed"
        },

        {
            id: 9,
            name: "Salma Mohamed"
        },

        {
            id: 10,
            name: "Nour Hassan"
        }

    ];




    const attendance =
        JSON.parse(
            localStorage.getItem(
                "attendance"
            )
        ) || {};




    let grades =
        JSON.parse(
            localStorage.getItem(
                "grades"
            )
        ) || {};




    function getAttendancePercentage(
        studentId
    ) {


        const records =
            attendance[studentId] || [];


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



    // ================= PENALTY =================

    function calculatePenalty(
        attendancePercentage
    ) {


        const absencePercentage =
            100 -
            attendancePercentage;


        /*
            Every 10% absence
            = 2 points penalty
        */


        return Math.floor(
            absencePercentage / 10
        ) * 2;

    }




    function renderGrades() {


        const table =
            document.getElementById(
                "gradesTable"
            );


        table.innerHTML = "";


        students.forEach(
            (student, index) => {


                const attendancePercentage =
                    getAttendancePercentage(
                        student.id
                    );


                const penalty =
                    calculatePenalty(
                        attendancePercentage
                    );


                const originalGrade =
                    grades[
                        student.id
                    ]?.originalGrade ?? 100;


                const finalGrade =
                    Math.max(
                        0,
                        originalGrade -
                        penalty
                    );


                const attendanceClass =
                    attendancePercentage >= 75
                        ? "attendance-good"
                        : "attendance-bad";


                const row =
                    document.createElement(
                        "tr"
                    );


                row.innerHTML = `

                    <td>
                        ${index + 1}
                    </td>


                    <td class="student-name">
                        ${student.name}
                    </td>


                    <td
                        class="${attendanceClass}">

                        ${attendancePercentage}%

                    </td>


                    <td>

                        <input

                            type="number"

                            min="0"

                            max="100"

                            value="${originalGrade}"

                            onchange="
                                updateGrade(
                                    ${student.id},
                                    this.value
                                )
                            "

                        >

                    </td>


                    <td>

                        -${penalty}

                    </td>


                    <td class="final-grade">

                        ${finalGrade}

                    </td>

                `;


                table.appendChild(row);

            }
        );

    }




    function updateGrade(
        studentId,
        value
    ) {


        let grade =
            parseFloat(value);


        if (isNaN(grade)) {

            grade = 0;

        }


        if (grade < 0) {

            grade = 0;

        }


        if (grade > 100) {

            grade = 100;

        }


        grades[studentId] = {

            originalGrade: grade

        };


        localStorage.setItem(

            "grades",

            JSON.stringify(
                grades
            )

        );


        renderGrades();

    }




    function saveGrades() {


        localStorage.setItem(

            "grades",

            JSON.stringify(
                grades
            )

        );


        alert(
            "Grades saved successfully! ✅"
        );

    }




    renderGrades();

</script>


</body>

</html>
