<?php
session_start();

// لو المستخدم مسجل دخول بالفعل يروح على صفحة كل اليوزرز
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: alluser.php");
    exit;
}

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $errors[] = "من فضلك املأ كل الحقول";
    } else {

        $foundUser = null;

        foreach ($_SESSION['users'] as $user) {
            if (strtolower($user['email']) === strtolower($email)) {
                $foundUser = $user;
                break;
            }
        }

        if (!$foundUser || !password_verify($password, $foundUser['password'])) {
            $errors[] = "البريد الإلكتروني أو كلمة المرور غير صحيحة";
        } else {
            // نجاح تسجيل الدخول
            $_SESSION['loggedin']    = true;
            $_SESSION['current_user'] = [
                'id'    => $foundUser['id'],
                'name'  => $foundUser['name'],
                'email' => $foundUser['email'],
            ];

            header("Location: allUsers.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login</title>

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
            width: 380px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px #555;
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
        .btn{
            border: none;
            padding: 12px 16px;
            border-radius: 20px;
            background: #667eea;
            color: #fff;
            font-size: 24px;
            transition: .3s;
        }
        .btn:hover{
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
    </style>
</head> 

<body> 
    <?php require "nav.php" ?>
    <section> 
        <div class="container"> 
            <h2>Login</h2> 

            <?php if (!empty($errors)): ?>
                <div class="alert alert-error">
                    <ul style="list-style:none;">
                        <?php foreach ($errors as $error): ?>
                            <li>• <?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="" method="POST"> 
                <input type="email" name="email" placeholder="Enter Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required> 
                <input type="password" name="password" placeholder="Password" required> 
                <button class="btn" type="submit"> login </button>
            </form> 

            <p>
                Go to sign up → <a href="./register.php">Register</a>
            </p>
        </div> 
    </section>

</body> 
</html>