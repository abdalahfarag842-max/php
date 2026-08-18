<?php
session_start();

// لو المستخدم مسجل دخول بالفعل يروح على صفحة كل اليوزرز
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: alluser.php");
    exit;
}

// نجهز مصفوفة اليوزرز جوه السيشن لو مش موجودة (السيشن هنا بتلعب دور الداتا بيز)
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name             = trim($_POST['name'] ?? '');
    $email            = trim($_POST['email'] ?? '');
    $password         = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if ($name === '' || $email === '' || $password === '' || $confirm_password === '') {
        $errors[] = "من فضلك املأ كل الحقول";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "البريد الإلكتروني غير صحيح";
    }

    if ($password !== $confirm_password) {
        $errors[] = "كلمة المرور وتأكيدها غير متطابقين";
    }

    if (strlen($password) < 6) {
        $errors[] = "كلمة المرور لازم تكون 6 حروف على الأقل";
    }

    // تأكد إن الإيميل مش مستخدم قبل كده
    foreach ($_SESSION['users'] as $user) {
        if (strtolower($user['email']) === strtolower($email)) {
            $errors[] = "البريد الإلكتروني ده مسجل بالفعل";
            break;
        }
    }

    if (empty($errors)) {
        $newId = count($_SESSION['users']) > 0
            ? max(array_column($_SESSION['users'], 'id')) + 1
            : 1;

        $_SESSION['users'][] = [
            'id'       => $newId,
            'name'     => $name,
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $success = true;
    }
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Register</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
        }

        section {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 500px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px #555;
            display: flex;
            flex-direction: column;
        
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
        }

        p {
            margin-top: 25px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }

        a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }

        .btn {
            border: none;
            padding: 12px 16px;
            width: 60%;
            border-radius: 20px;
            background: #667eea;
            color: #fff;
            font-size: 24px;
            transition: .3s;
            cursor: pointer;
            align-self: center;
        }

        .btn:hover {
            background: #667eea57;
            color: #764ba2;
        }

        a:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .alert-error {
            background: #fdecea;
            color: #b71c1c;
            border: 1px solid #f5c6cb;
        }

        .alert-success {
            background: #e6f7ec;
            color: #1e7e34;
            border: 1px solid #c3e6cb;
        }
    </style>
</head> 

<body> 
    <?php require "nav.php" ?>
    <section> 
        <div class="container"> 

            <h2>Register</h2> 

            <?php if (!empty($errors)): ?>
                <div class="alert alert-error">
                    <ul style="list-style:none;">
                        <?php foreach ($errors as $error): ?>
                            <li>• <?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success">
                    تم إنشاء الحساب بنجاح! تقدر تسجل دخول دلوقتي
                    <br>
                    <a href="./login.php">اضغط هنا للدخول</a>
                </div>
            <?php else: ?>

            <form action="" method="POST"> 

                <input 
                    type="text" 
                    name="name" 
                    placeholder="Enter Name" 
                    value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                    required
                > 

                <input 
                    type="email" 
                    name="email" 
                    placeholder="Enter Email" 
                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                    required
                > 

                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password" 
                    required
                > 

                <input 
                    type="password" 
                    name="confirm_password" 
                    placeholder="Confirm Password" 
                    required
                > 

                <button class="btn" type="submit">
                    Register
                </button>

            </form> 
            <?php endif; ?>

            <p>
                Already have an account → 
                <a href="./login.php">Login</a>
            </p>

        </div> 
    </section>

</body> 
</html>