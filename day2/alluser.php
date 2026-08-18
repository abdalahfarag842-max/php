<?php
session_start();

// لو مش مسجل دخول امنعه وحوله لصفحة اللوجين
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

// حذف يوزر
if (isset($_GET['delete'])) {
    $deleteId = (int) $_GET['delete'];

    $_SESSION['users'] = array_values(array_filter(
        $_SESSION['users'],
        fn($user) => $user['id'] !== $deleteId
    ));

    header("Location: allUsers.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>

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

        .wrapper {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px #555;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #667eea;
            color: white;
        }

        tr:hover {
            background: #f5f5f5;
        }

        .actions a {
            display: inline-block;
            padding: 6px 12px;
            margin: 0 4px;
            border-radius: 15px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            color: #fff;
        }

        .update {
            background: #f0ad4e;
        }

        .delete {
            background: #d9534f;
        }

        .empty {
            text-align: center;
            padding: 20px;
            color: #777;
        }
    </style>
</head>
<body>

    <?php require "nav.php" ?>

    <div class="wrapper">
        <h2>All Users</h2>

        <?php if (empty($_SESSION['users'])): ?>
            <p class="empty">لا يوجد مستخدمين حاليا</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>userName</th>
                        <th>UserEmail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['users'] as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id']) ?></td>
                            <td><?= htmlspecialchars($user['name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td class="actions">
                                <a class="delete">delete</a>
                                <a class="update">update</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

</body>
</html>