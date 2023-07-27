<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div>
            <form action="php/register.php" method="post">
                <h2>
                    <?php
                        if (isset($_SESSION['errorMsg'])) {
                            echo $_SESSION['errorMsg'];
                            unset($_SESSION['errorMsg']);
                        }
                    
                    ?>
                </h2>
                <div>
                    <input type="text" name=fullname placeholder="Fullname">
                </div>
                 <div>
                    <input type="email" name=email placeholder="Email">
                </div>
                 <div>
                    <input type="password" name=password placeholder="Password">
                </div>
                <div>
                    <input type="password" name=confirm-password placeholder="Confirm Password">
                </div>
                <div>
                    <button type="submit" name="register">Register</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>