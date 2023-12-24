<style>
    .content {
        float: left;
        width: 70%;
        padding: 5px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<div class="content">
    <?php

    if (isset($_GET['page'])) {
        $jmp = $_GET['page'];
    } else {
        $jmp = '';
    }
    // $lang = 'english';
    // if(isset($_SESSION['lang'])){
    //     require_once('lang/'.$lang.'php');
    // }

    if ($jmp == 'Home') {
        include("content/index.php");
    } elseif ($jmp == 'Register') {
        include("content/register.php");
    } elseif ($jmp == 'Login') {
        include("content/login.php");
    } elseif ($jmp == 'Calculator') {
        include("content/calculator.php");
    } elseif ($jmp == 'DrawTable') {
        include("content/drawTable.php");
    } elseif ($jmp == 'Loop') {
        include("content/loop.php");
    } elseif ($jmp == 'Ar1Chieu') {
        include("content/ar1Chieu.php");
    } elseif ($jmp == 'Matrix') {
        include("content/matrix.php");
    } elseif ($jmp == 'AssociateArr') {
        include("content/associatearray.php");
    } elseif ($jmp == 'Logout') {
        include("content/logout.php");
    } elseif ($jmp == 'Contact') {
        include("content/contact.php");
    } else {
        include("content/index.php");
    }
    ?>
</div>