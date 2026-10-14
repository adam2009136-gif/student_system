<?php
// Registration Page
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account - Student Portal</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #eaf6ff;
            color: #0b1f3a;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 30px 15px;
        }

        .register-container {
            width: 100%;
            max-width: 520px;
        }

        .register-card {
            background: white;
            border-radius: 20px;
            padding: 35px;

            box-shadow:
                0 10px 35px rgba(11, 31, 58, 0.12);

            border: 1px solid rgba(142, 216, 255, 0.3);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header-icon {
            width: 65px;
            height: 65px;

            margin: 0 auto 15px;

            border-radius: 50%;

            background: #eaf6ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 32px;
        }

        .header h1 {
            color: #0b1f3a;
            font-size: 27px;
            margin-bottom: 8px;
        }

        .header h1 span {
            color: #168ac1;
        }

        .header p {
            color: #607d98;
            font-size: 14px;
        }

        .section-label {
            display: block;

            color: #0b1f3a;

            font-size: 14px;

            font-weight: bold;

            margin-bottom: 10px;
        }

        .role-container {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 12px;

            margin-bottom: 22px;
        }

        .role-box {
            border: 2px solid #d9eaf3;

            border-radius: 12px;

            padding: 15px;

            cursor: pointer;

            transition: 0.3s;

            background: #fff;
        }

        .role-box:hover {
            border-color: #8ed8ff;

            background: #f7fcff;

            transform: translateY(-2px);
        }

        .role-box input {
            accent-color: #0b1f3a;

            margin-right: 7px;
        }

        .role-box label {
            color: #0b1f3a;

            font-weight: bold;

            cursor: pointer;

            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;

            color: #0b1f3a;

            font-size: 14px;

            font-weight: bold;

            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            width: 100%;

            padding: 13px 15px;

            border: 2px solid #d9eaf3;

            border-radius: 10px;

            outline: none;

            color: #0b1f3a;

            background: white;

            font-size: 14px;

            transition: 0.3s;
        }

        .form-control::placeholder {
            color: #9aaabd;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #8ed8ff;

            box-shadow:
                0 0 0 3px
                rgba(142, 216, 255, 0.2);
        }

        .link-style {
    text-decoration: none;
    color: #168ac1;
}

.link-style:hover {
    color: #0b1f3a;
}


        .create-btn {
            width: 100%;

            border: none;

            background: #0b1f3a;

            color: white;

            padding: 14px;

            border-radius: 10px;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            margin-top: 5px;

            transition: 0.3s;
        }

        .create-btn:hover {
            background: #8ed8ff;

            color: #0b1f3a;

            transform: translateY(-2px);

            box-shadow:
                0 5px 15px
                rgba(142, 216, 255, 0.35);
        }

        .form-footer {
            text-align: center;

            margin-top: 22px;

            padding-top: 18px;

            border-top: 1px solid #e5eef4;

            color: #607d98;

            font-size: 13px;
        }

        .form-footer a {
            color: #168ac1;

            text-decoration: none;

            font-weight: bold;
        }

        .form-footer a:hover {
            color: #0b1f3a;
        }

        .hidden {
            display: none;
        }

        @media (max-width: 550px) {

            body {
                padding: 20px 12px;
            }

            .register-card {
                padding: 25px 20px;
            }

            .header h1 {
                font-size: 23px;
            }

            .role-container {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<div class="register-container">


    <div class="register-card">


        <div class="header">

            <div class="header-icon">
                🎓
            </div>

            <h1>
                Create your <span>Account</span>
            </h1>

            <p>
                Join We School and start your learning journey.
            </p>

        </div>


        <form method="POST" action="">


            <label class="section-label">
                Account Type
            </label>


            <div class="role-container">


                <div class="role-box">

                    <input
                        type="radio"
                        name="role"
                        id="student"
                        value="student"
                        checked
                    >

                    <label for="student">
                        🎓 Student
                    </label>

                </div>


                <div class="role-box">

                    <input
                        type="radio"
                        name="role"
                        id="teacher"
                        value="teacher"
                    >

                    <label for="teacher">
                        👨‍🏫 Teacher
                    </label>

                </div>


            </div>


            <div class="form-group">

                <label for="name">
                    Full Name
                </label>

                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter your full name"
                    required
                >

            </div>


            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                >

            </div>


            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

            </div>


            <div class="form-group">

                <label for="confirm_password">
                    Confirm Password
                </label>

                <input
                    type="password"
                    class="form-control"
                    id="confirm_password"
                    name="confirm_password"
                    placeholder="Confirm your password"
                    required
                >

            </div>


            <div
                class="form-group"
                id="studentFields"
            >

                <label for="class">
                    Class
                </label>

                <select
                    class="form-select"
                    id="class"
                    name="class"
                >

                    <option value="">
                        Select your class
                    </option>

                    <option value="1">
                        First Year
                    </option>

                    <option value="2">
                        Second Year
                    </option>

                    <option value="3">
                        Third Year
                    </option>

                </select>

            </div>


            <div
                class="form-group hidden"
                id="teacherFields"
            >

                <label for="subject">
                    Subject
                </label>

                <select
                    class="form-select"
                    id="subject"
                    name="subject"
                >

                    <option value="">
                        Select your subject
                    </option>

                    <option value="HTML">
                        HTML
                    </option>

                    <option value="CSS">
                        CSS
                    </option>

                    <option value="JavaScript">
                        JavaScript
                    </option>

                    <option value="PHP">
                        PHP
                    </option>

                </select>

            </div>


            <button
                type="submit"
                class="create-btn"
            ><a href="home.php" class="link-style"> Create Account →</a>
               
            </button>


        </form>


        <div class="form-footer">

            Already have an account?

            <a href="login.php">
                Login here
            </a>

        </div>


    </div>


</div>


<script>

    const student =
        document.getElementById("student");

    const teacher =
        document.getElementById("teacher");

    const studentFields =
        document.getElementById("studentFields");

    const teacherFields =
        document.getElementById("teacherFields");


    student.addEventListener("change", function () {

        studentFields.classList.remove("hidden");

        teacherFields.classList.add("hidden");

    });


    teacher.addEventListener("change", function () {

        studentFields.classList.add("hidden");

        teacherFields.classList.remove("hidden");

    });

</script>


</body>

</html>
