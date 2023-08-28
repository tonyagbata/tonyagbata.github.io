<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in </title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: calibri;
            transition: 0.5s ease;
        }

        button{
            background: blue;
            color: white;
            width: 100px;
            margin: 5px auto;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 3px;
            font-size: 14px
        }

        button:hover{
            background: green;

        }

        input{
            padding: 5px;
            margin: 5px 0px;
            border: 1px solid grey;
            border-width: 0px 0px 1px 0px
        }

        input:focus{
            outline: none;
        }

        input:hover{
            border-color: red;
        }

        h1{
            text-align: center;
        }

        .user_content{
            width: 50%;
            margin: 20px auto;
        }

       #sign_in, #sign_up{
           display: flex;
           flex-direction: column;
       } 

       #create_acc{
           cursor: pointer;
           color: blue;
       }

       #sign_up{
           display: none;
       }
    </style>
</head>
<body>
<section class="user_content">
    <div id="errormsg"></div>

<form action="login.php" method="POST">

<div id="sign_in">
    <h1>Sign in</h1>
    <input type="email" name="e-mail" id="email_input" placeholder="email address">
    <input type="password" name="password" id="pass" placeholder="Password">
    <button type="submit">Sign in</button>

    <span id="create_acc">Create account</span>
</div>

<div id="sign_up">
    <h1>Sign up</h1>
    <input type="text" id="user" name="username" placeholder="Username">
    <input type="email" id="e-mail_db" name="mail-db" placeholder="E-mail account">
    <input type="password" id="password_db" name="password-db" placeholder="Password">
    <input type="password" id="re-password_db" name="re-password-db" placeholder="Password">
    <button type="submit">Sign up</button>

</div>

</form>

</section>

<script>
    const error = document.getElementById("errormsg")

    const create_acc = document.getElementById("create_acc")

    const email_input = document.getElementById("email_input")
    const pass = document.getElementById("pass")

    const user = document.getElementById("user")
    const e-mail_db = document.getElementById("e-mail_db")
    const password_db = document.getElementById("password_db")
    const re-password_db = document.getElementById("re-password_db")



    
</script>
</body>
</html>