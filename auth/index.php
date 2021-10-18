<?php
if (isset($_COOKIE['testck'])) {
    header("LOCATION:profile.php");
}
if (isset($_REQUEST['login'])) {
    $username = $_REQUEST['uname'];
    $password = $_REQUEST['passwd'];
    $conn = mysqli_connect("localhost", "root", "", "authentication");
    $sql = mysqli_query($conn, "SELECT `name` FROM `php-auth` WHERE `password`='$password'");
    list($name) = mysqli_fetch_row($sql);
    if ($username == $name) {
        setcookie("testck", "$name", time() + 1800);
        header("LOCATION:profile.php");
    } else {
        header("LOCATION:index.php");
    }
}

?>





<?php include './partials/header.php'; ?>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="./img/log-in.svg" alt="My Happy SVG" class="p-3" />
        </div>

        <!-- Login Form -->
        <form action="index.php" method="POST">
            <input type="text" id="login" class="fadeIn second" name="uname" placeholder="login" autocomplete="off">
            <input type="password" class="pwsd-xyz" id="password" class="fadeIn third" name="passwd" placeholder="password" autocomplete="off">
            <input type="submit" class="fadeIn fourth" name="login" value="login">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>
<?php include './partials/footer.php'; ?>