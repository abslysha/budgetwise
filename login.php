<?php
session_start();
include 'db.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if ($row = mysqli_fetch_assoc($result)) {
        if ($row['status'] == 'active') {
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['role'] = $row['role'];
                
                header("Location: dashboard.php");
                exit();
            } else {
                $message = "Your account has been deactivated.";
            }
        } else {
            $message = "Invalid email or password.";
        }
    } else {
        $message = "Invalid email or password.";
    
}

DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - BudgetWise</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .auth-container { max-width: 400px; margin: 80px auto; background: white; padding: 30px; border-radius: 12px; border: 1px solid var(--border-color); }
        .auth-container h2 { color: var(--dark-sage); margin-bottom: 5px; text-align: center; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: 500; }
        .form-group input { width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px; box-sizing: border-box; }
        .btn-submit { width: 100%; background: var(--sage-green); color: white; border: none; padding: 12px; border-radius: 6px; font-weight: bold; cursor: pointer; }
        .btn-submit:hover { background: var(--dark-sage); }
        .auth-links { text-align: center; margin-top: 15px; font-size: 0.9rem; }
        .auth-links a { color: var(--sage-green); text-decoration: none; }
    </style>
</head>
<body style="display: block;">
    <div class="auth-container">
        <h2>🌱 BudgetWise</h2>
        <p style="text-align: center; color: var(--text-muted); margin-bottom: 20px;">Welcome back! Please login.</p>
        
        <?php if(isset($_GET['success']) && $_GET['success'] == 'registered'): ?>
            <p style="color: var(--sage-green); text-align: center;">Registration successful! Please log in.</p>
        <?php endif; ?>

        <?php if($message): ?>
            <p style="color: #d9534f; text-align: center;"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn-submit">Log In</button>
        </form>
        <div class="auth-links">
            Don't have an account? <a href="register.php">Register here</a>
        </div>
    </div>
</body>
</html>