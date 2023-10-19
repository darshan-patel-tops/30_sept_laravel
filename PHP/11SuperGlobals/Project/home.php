
<?php require_once('header.php'); ?>

<?php
echo "<pre>";
print_r($_SESSION);
// echo $_SESSION['user_info']['name'];

?>
<!-- <?php echo "<h1> Welcome $_COOKIE[username] to our website </h1>"; ?> -->
<?php echo "<h1> Welcome ". $_SESSION['user_info']['name'] . " to our website </h1>"; ?>





<?php require_once('footer.php'); ?>