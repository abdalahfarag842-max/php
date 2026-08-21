<?php
require "./connection.php";

$user = null;

// لو فيه id في الـ URL، هات بيانات المستخدم عشان نعرضها
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->show('users', $id);
    $user = $result[0] ?? null;

    if (!$user) {
        header("location:allUsers.php?message=" . urlencode("User not found"));
        exit;
    }
}

// لو الفورم اتبعت (POST)، حدّث البيانات
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $data = [
        'name' => $_POST['userName'],
        'email' => $_POST['userEmail'],
    ];
    // مهم: مبنعدلش الباسورد هنا إلا لو المستخدم كتب واحدة جديدة فعلاً

    $result = $db->update('users', $id, $data);
    header("location:allUsers.php?message=" . urlencode($result));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>

<section class="m-3">
    <form action="edit.php" method="post" class="border border-primary w-75 m-auto p-5">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <input class="form-control m-3" type="text" name="userName" value="<?= $user['name'] ?>" placeholder="Enter Your Name">

        <input class="form-control m-3" type="email" name="userEmail" value="<?= $user['email'] ?>" placeholder="Enter Your Email">

        <input class="btn btn-primary" type="submit" value="Update">
    </form>
</section>

</body>
</html>