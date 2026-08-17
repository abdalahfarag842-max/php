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
    </style>
</head> 

<body> 
    <?php  require "nav.php" ?>
    <section> 
        <div class="container"> 

            <h2>Register</h2> 
             
            <form action=""> 

                <input 
                    type="text" 
                    name="name" 
                    placeholder="Enter Name" 
                    required
                > 

                <input 
                    type="email" 
                    name="email" 
                    placeholder="Enter Email" 
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

            <p>
                Already have an account → 
                <a href="./login.php">Login</a>
            </p>

        </div> 
    </section>

</body> 
</html>