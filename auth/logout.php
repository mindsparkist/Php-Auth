<?php
setcookie("testck", "$name", time() - 10);
header("LOCATION:profile.php");
?>

<?php include './partials/header.php';?>

<?php include './partials/footer.php'; ?>