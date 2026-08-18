<?php
// نتأكد إن السيشن شغالة (لو الصفحة اللي طلبت nav.php لسه معملتش session_start)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
<style>
    .navbar {
        width: 100%;
        height: 70px;
        background: #fff;
        padding: 0 50px;

        display: flex;
        justify-content: space-between;
        align-items: center;

        box-shadow: 0 2px 10px #55555540;
    }

    .logo {
        color: #764ba2;
        font-size: 24px;
        font-weight: bold;
        text-decoration: none;
    }

    .nav-links {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .nav-links a {
        color: #667eea;
        text-decoration: none;
        font-weight: bold;
        padding: 10px 18px;
        border-radius: 20px;
        transition: .3s;
    }

    .nav-links a:hover {
        background: #667eea;
        color: white;
    }

    .nav-links span {
        color: #333;
        font-weight: bold;
        margin-right: 8px;
    }
</style>


<nav class="navbar">

    <a href="#" class="logo">
        My Website
    </a>

    <div class="nav-links">

        <?php if ($isLoggedIn): ?>

            <span>Hi, <?= htmlspecialchars($_SESSION['current_user']['name']) ?></span>

            <a href="./allUsers.php">All Users</a>
            <a href="./logout.php">Logout</a>

        <?php else: ?>

            <a href="./login.php">Login</a>

            <a href="./register.php">Register</a>

        <?php endif; ?>

    </div>

</nav>