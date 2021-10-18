<?php
if (!isset($_COOKIE['testck'])) {
    header("LOCATION:index.php");
} else{
    include './partials/card.php';
}
?>



