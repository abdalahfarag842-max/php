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
    </style>
</head> 

<body> 
    <?php require "nav.php" ?>
    <section> 
        <div class="container"> 
            <h2>Login</h2> 
             
            <form action=""> 
                <input type="email" name="email" placeholder="Enter Email" required> 
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