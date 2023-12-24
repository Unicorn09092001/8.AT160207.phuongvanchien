<?php
if (isset($_POST['Login'])) {
    $user = $_POST['userName'];
    $pass = $_POST['passwd'];
    if ($user == 'admin' && $pass == 'admin') {
        $_SESSION['userName'] = $user;
        $_SESSION['passwd'] = $pass;
        if (isset($_POST['cookieLogin'])) {
            setcookie('Username', $user, time() + 10);
            setcookie("Password", $pass, time() + 10);
        }
        header('Location:admin/index.php');
    } else {
        echo ' <p style="color:red;">Sai ten hoac mat khau</p>';
    }
}
?>

<?php
if (count($_COOKIE) > 0) {
    echo '<p style="color:green;">Cookies are enabled.</p>';
} else {
    echo '  <p style="color:lightred;">Cookies are disabled.</p>';
}
?>

<title>Login</title>
<style>
    .login {
        padding: 50px 100px;
    }
</style>
<div class="login">
    <h4>Login Form</h4>
    <form action="" method="POST">
        <tr>
            <td>Username:</td>
            <td><input style="margin: 0 0 10px 30px ;
             <?php
                if (isset($_COOKIE['Username']) && isset($_COOKIE['Password'])) {
                ?> background-color: yellow;
                    <?php
                }
                    ?>" type="text" name="userName" value="<?php
                                                            if (isset($_COOKIE['Username']) && isset($_COOKIE['Password'])) {
                                                                echo $_COOKIE['Username'];
                                                            }
                                                            ?>" /></td>
        </tr>
        </br>
        <tr>
            <td>Password:</td>
            <td><input style="margin: 0 0 10px 33.5px;
            <?php
            if (isset($_COOKIE['Username']) && isset($_COOKIE['Password'])) {
            ?> background-color: yellow;
                    <?php
                }
                    ?>" type="password" name="passwd" value="<?php
                                                                if (isset($_COOKIE['Username']) && isset($_COOKIE['Password'])) {
                                                                    echo $_COOKIE['Password'];
                                                                }
                                                                ?>" /></td>
        </tr>
        </br>
        <tr>
            <td><input type="checkbox" name="cookieLogin" />Ghi nho dang nhap</td>
            <td><input style="margin: 0 0 10px 2px;padding: 0 5px;" type="submit" name="Login" value="Login" /></td>
        </tr>
    </form>
</div>