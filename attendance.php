<?php
// Attendance Page
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Attendance</title>


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

            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
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

            margin: 40px auto;
        }



        .top-section {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;

            gap: 20px;

            flex-wrap: wrap;
        }


        .top-section h2 {
            font-size: 28px;
        }


        .date-box {
            background: white;

            padding: 15px;

            border-radius: 10px;

            box-shadow:
                0 5px 15px
                rgba(0,0,0,0.08);
        }


        input[type="date"] {
            padding: 10px;

            border: 2px solid #8ed8ff;

            border-radius: 7px;

            color: #0b1f3a;
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
            padding: 15px;

            text-align: center;

            border-bottom:
                1px solid #d8eef9;
        }


        tr:hover {
            background: #f1faff;
        }


        .student-name {
            font-weight: bold;

            text-align: left;
        }



        .status-btn {
            border: none;

            padding: 8px 15px;

            border-radius: 7px;

            cursor: pointer;

            font-weight: bold;

            margin: 3px;

            transition: 0.2s;
        }


        .present {
            background: #b8f2c8;

            color: #176b2c;
        }


        .absent {
            background: #ffb8b8;

            color: #8b1e1e;
        }


        .selected {
            outline: 3px solid #8ed8ff;

            transform: scale(1.05);
        }



        .summary {
            margin-top: 25px;

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;
        }


        .card {
            background: #0b1f3a;

            color: white;

            padding: 20px;

            border-radius: 12px;

            text-align: center;
        }


        .card h3 {
            color: #8ed8ff;

            margin-bottom: 10px;
        }


        .card p {
            font-size: 28px;

            font-weight: bold;
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


            .summary {
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


        <a href="home.php" >
            Home
        </a>


        <a href="attendance.php" class="active">
            Attendance
        </a>


        <a href="grade.php">
            Grade
        </a>


        <a href="vedios.php">
            Videos
        </a>


    </div>



    <a
        href="profile.php"
        class="profile-icon"
        title="Profile">

        👤

    </a>


</nav>



<main>


    <div class="container">



        <div class="top-section">


            <h2>
                📋 Student Attendance
            </h2>


            <div class="date-box">


                <label for="attendanceDate">

                    <b>Date:</b>

                </label>


                <input
                    type="date"
                    id="attendanceDate">


            </div>


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
                            Status
                        </th>


                        <th>
                            Attendance %
                        </th>

                    </tr>

                </thead>


                <tbody id="studentsTable">

                </tbody>


            </table>



            <button
                class="save-btn"
                onclick="saveAttendance()">

                💾 Save Attendance

            </button>


        </div>




        <div class="summary">


            <div class="card">

                <h3>
                    Total Students
                </h3>

                <p id="totalStudents">
                    0
                </p>

            </div>



            <div class="card">

                <h3>
                    Present
                </h3>

                <p id="presentCount">
                    0
                </p>

            </div>



            <div class="card">

                <h3>
                    Absent
                </h3>

                <p id="absentCount">
                    0
                </p>

            </div>


        </div>


    </div>


</main>




<script>



    const students = [

        { id: 1, name: "Ahmed Mohamed" },

        { id: 2, name: "Omar Ali" },

        { id: 3, name: "Youssef Hassan" },

        { id: 4, name: "Mohamed Ibrahim" },

        { id: 5, name: "Khaled Mahmoud" },

        { id: 6, name: "Adam Mostafa" },

        { id: 7, name: "Ali Samir" },

        { id: 8, name: "Mariam Ahmed" },

        { id: 9, name: "Salma Mohamed" },

        { id: 10, name: "Nour Hassan" }

    ];




    let attendance =
        JSON.parse(
            localStorage.getItem("attendance")
        ) || {};




    const dateInput =
        document.getElementById(
            "attendanceDate"
        );


    const today =
        new Date()
            .toISOString()
            .split("T")[0];


    dateInput.value = today;




    function getStudentAttendance(studentId) {


        let records =
            attendance[studentId] || [];


        if (records.length === 0) {

            return 100;

        }


        const present =
            records.filter(
                record =>
                    record.status === "present"
            ).length;


        return Math.round(
            (present / records.length) * 100
        );

    }




    function renderStudents() {


        const table =
            document.getElementById(
                "studentsTable"
            );


        table.innerHTML = "";


        students.forEach(
            (student, index) => {


                const records =
                    attendance[student.id] || [];


                const todayRecord =
                    records.find(
                        record =>
                            record.date ===
                            dateInput.value
                    );


                const status =
                    todayRecord
                        ? todayRecord.status
                        : null;


                const row =
                    document.createElement("tr");


                row.innerHTML = `

                    <td>
                        ${index + 1}
                    </td>


                    <td class="student-name">
                        ${student.name}
                    </td>


                    <td>


                        <button
                            class="
                                status-btn
                                present
                                ${status === "present"
                                    ? "selected"
                                    : ""}
                            "

                            onclick="
                                setStatus(
                                    ${student.id},
                                    'present'
                                )
                            ">

                            Present

                        </button>


                        <button
                            class="
                                status-btn
                                absent
                                ${status === "absent"
                                    ? "selected"
                                    : ""}
                            "

                            onclick="
                                setStatus(
                                    ${student.id},
                                    'absent'
                                )
                            ">

                            Absent

                        </button>


                    </td>


                    <td>

                        ${getStudentAttendance(
                            student.id
                        )}%

                    </td>

                `;


                table.appendChild(row);

            }
        );


        updateSummary();

    }




    function setStatus(
        studentId,
        status
    ) {


        if (!attendance[studentId]) {

            attendance[studentId] = [];

        }


        const date =
            dateInput.value;


        const existingRecord =
            attendance[studentId].find(
                record =>
                    record.date === date
            );


        if (existingRecord) {

            existingRecord.status =
                status;

        }

        else {

            attendance[studentId].push({

                date: date,

                status: status

            });

        }


        localStorage.setItem(
            "attendance",
            JSON.stringify(attendance)
        );


        renderStudents();

    }




    function updateSummary() {


        let present = 0;

        let absent = 0;


        students.forEach(
            student => {


                const records =
                    attendance[student.id] || [];


                const record =
                    records.find(
                        r =>
                            r.date ===
                            dateInput.value
                    );


                if (
                    record?.status ===
                    "present"
                ) {

                    present++;

                }


                if (
                    record?.status ===
                    "absent"
                ) {

                    absent++;

                }

            }
        );


        document.getElementById(
            "totalStudents"
        ).textContent =
            students.length;


        document.getElementById(
            "presentCount"
        ).textContent =
            present;


        document.getElementById(
            "absentCount"
        ).textContent =
            absent;

    }




    function saveAttendance() {


        localStorage.setItem(
            "attendance",
            JSON.stringify(attendance)
        );


        alert(
            "Attendance saved successfully! ✅"
        );

    }




    dateInput.addEventListener(
        "change",
        renderStudents
    );




    renderStudents();

</script>


</body>

</html>
