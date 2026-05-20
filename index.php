<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="icon" type="image/x-icon" href="./img/2.png">
    <?php
    include("commonfiles/bootstraplinks.php");
    ?>
</head>
<body>
    
<?php
session_start();
include("includes/header.php");
?>
<?php
if(!isset($_SESSION['user']['username'])){
      header("location:./includes/login.php");
    exit();
}
?>
<?php
if(isset($_REQUEST['login']) && !isset($_SESSION['user']['usernmae'])){
    header("location:./includes/login.php");
}elseif(isset($_REQUEST['signup'] ) && !isset($_SESSION['user']['usernmae'])){
     header("location:./includes/signup.php");
}
?>

<?php include("includes/offcanvas sidebar.php"); ?>

<div class="d-flex min-vh-100">

    <?php include("includes/sidebar.php"); ?>

    <div class="flex-grow-1">
        <?php
        $page = $_GET['page'] ?? 'dashboard';

        switch($page){
            case 'dashboard':
                include("includes/dashboarad.php");
                break;

            case 'transactions':
                include("includes/transactions.php");
                break;

            case 'cetagories':
                include("includes/cetagories.php");
                break;

            case 'reports':
                include("includes/report.php");
                break;

            default:
                include("includes/dashboarad.php");
        }
        ?>
    </div>

</div>

<?php include("includes/footer.php"); ?>
<script>
    window.user = <?php echo json_encode($_SESSION['user'] ?? null); ?>;
</script>


</body>
</html> 