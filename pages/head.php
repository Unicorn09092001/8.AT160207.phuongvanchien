<style>
    * {
        margin: 0;
        padding: 0;
    }

    .header {
        width: 100%;
        height: 20%;
        background-color: mediumpurple;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header1 {
        background-color: gray;
        font-size: 20px;
        width: auto;
        height: 55px;
        margin-top: 45px;
        margin-left: 10%;
        box-sizing: border-box;
        padding: 5px;
        display: inline-block;
        border-radius: 5px;
    }

    .header1_1 {
        background-color: whitesmoke;
        display: inline-block;
        padding: 10px;
        border-radius: 4px;
        transition: 0.25s;
    }

    .header1_1:hover {
        /* padding: 3px 10px 3px 10px; */
        border-radius: 25px;
    }

    .header1_1>a {
        text-decoration: none;
        color: green;
        font-weight: 550;
    }
</style>
<div class="header">
    <div class="header1" style="">
        <li class="header1_1"><a href="index.php?page=Home">Home</a></li>
        <!-- page co s ko vay -->
        <li class="header1_1"><a href="index.php?page=Register">Register</a></li>
        <li class="header1_1"><a href="index.php?page=Login">Login</a></li>
        <!-- <li class="header1_1"><a href="index.php?page=Contact">Contact</a></li> -->
        <li class="header1_1"><a href="index.php?page=Calculator">Calculator</a></li>
        <li class="header1_1"><a href="index.php?page=DrawTable">DrawTable</a></li>
        <li class="header1_1"><a href="index.php?page=Loop">Loop</a></li>
        <li class="header1_1"><a href="index.php?page=Ar1Chieu">Ar1Chieu</a></li>
        <li class="header1_1"><a href="index.php?page=Matrix">Matrix</a></li>
        <li class="header1_1"><a href="index.php?page=AssociateArr">AssociateArr</a></li>
    </div>
</div>