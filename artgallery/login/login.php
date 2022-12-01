<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <?php
        session_start();
        $accounts = array(
            "user1" => array(
                "firstname" => 'Abraham',
                "lastname" => 'Indasan',
                "type" => 'admin',
                "username" => 'abraham',
                "password" => 'indasan'
            ),
            "user2" => array(
                "firstname" => 'Daph',
                "lastname" => 'Nagata',
                "type" => 'admin',
                "username" => 'daph',
                "password" => 'nagata'
            ),
            "user3" => array(
                "firstname" => 'Sidrick',
                "lastname" => 'Cadungog',
                "type" => 'user',
                "username" => 'sid',
                "password" => 'cad'
            ),
            "user4" => array(
                "firstname" => 'Andre',
                "lastname" => 'Que',
                "type" => 'user',
                "username" => 'dre',
                "password" => 'que'
            ),
            "user5" => array(
                "firstname" => 'Alkhayzel',
                "lastname" => 'Sali',
                "type" => 'user',
                "username" => 'khay',
                "password" => 'sali'
            )
        );
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = htmlentities($_POST['username']);
            $password = htmlentities($_POST['password']);
            foreach($accounts as $keys => $value){
                if($username == $value['username'] && $password == $value['password']){
                    $_SESSION['logged-in'] = $value['username'];
                    $_SESSION['fullname'] = $value['firstname'] . ' ' . $value['lastname'];
                    $_SESSION['user_type'] = $value['type'];
                    if($value['type'] == 'admin'){
                        header('location: ../admin/dashboard.php');
                    }else{
                        header('location: ../user/dashboard.php');
                    }
                }
            }
            $error = 'Invalid username/password. Try again.';
        }
    
    ?>
    <div class="login-container">
        <form class="login-form" action="login.php" method="post">
            <div class="logo-details">
                <i class='bx bx-meteor'></i>
                <span class="logo-name">Art Gallery</span>
            </div>
            <hr class="divider">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username" required tabindex="1">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required tabindex="2">
            <input class="button" type="submit" value="Login" name="login" tabindex="3">
            <tr>
                <td>
                    <br>
                    <label for="" class="sub-text1" style="font-weight: 300;">Don't have an account?</label>    
                    <a href="../signup/signup.php" style="text-align: right" class="hover-link non-style-link">Sign Up</a>
                    <br><br><br>
                </td>
            </tr>
            <?php
                if(isset($error)){
                    echo '<div><p class="error">'.$error.'</p></div>';
                    
                }

            ?>
        </form>
    </div>
</body>
</html>