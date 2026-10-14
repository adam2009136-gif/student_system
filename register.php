<?php
session_start();
require 'db.php';
 $errors = [];
 $old_input = ['name' => '', 'email' => '', 'role' => 'student', 'class' => '', 'subject' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $role = $_POST['role'] ?? 'student';
    $class = $_POST['class'] ?? null;
    $subject = $_POST['subject'] ?? null;
    $old_input = ['name' => $name, 'email' => $email, 'role' => $role, 'class' => $class, 'subject' => $subject];

    if (empty($name)) $errors[] = "Full Name is required.";
    if (empty($email)) $errors[] = "Email Address is required.";
    if (empty($password)) $errors[] = "Password is required.";
    if ($password !== $confirm_password) $errors[] = "Passwords do not match.";
    if ($role === 'student' && empty($class)) $errors[] = "Please select your class.";
    if ($role === 'teacher' && empty($subject)) $errors[] = "Please select your subject.";

    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) $errors[] = "This email is already registered.";
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role, class_level, subject) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $hashed_password, $role, $class, $subject]);
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['name'] = $name;
        $_SESSION['role'] = $role;
        header("Location: home.php");
        exit();
    }
}
?>