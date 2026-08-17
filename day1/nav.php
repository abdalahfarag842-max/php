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
</style>


<nav class="navbar">

    <a href="#" class="logo">
        My Website
    </a>

    <div class="nav-links">

        <a href="./login.php">Login</a>

        <a href="./register.php">Register</a>

    </div>

</nav>