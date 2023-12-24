<style>
    .right {
        width: 60%;
        padding: 50px 0 0 100px;
        font-size:24px;
        line-height: 2;
        font-family: 'Times New Roman', Times, serif;
    }
</style>

<div class="right">
    <p>Company name: <b>TLA</b> </p>
    <p>Address: <b>Thanh Xuân - Hà Nội</b></p>
    <p>Descreiption: <b><i>Sofware company</i></b></p>
</div>
<!-- <pre>
        Lam nhiem vu:    7, 8, 12->18
        Da lam:          1->8(1/2)
    </pre> -->
<?php
// Đặt biến ngôn ngữ
// if (isset($_GET['lang']) && !empty($_GET['lang'])) {
//     $_SESSION['lang'] = $_GET['lang'];
//     if (isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']) {
//         echo "<script type='text/javascript'> location.reload(); </script>";
//     }
// }
// // Chèn vào tệp tin ngôn ngữ, ngôn ngữ mặc định là tiếng Anh
// if (isset($_SESSION['lang'])) {
//     $lang = $_SESSION['lang'];
//     include ("../language/$lang.php");
// } else {
//     include ("../language/english.php");
// }
?>
<script>
    // Hàm thay đổi ngôn ngữ bằng JS
    // function changeLang() {
    //     document.getElementById('form_lang').submit();
    // }
</script>
<!-- Ngôn ngữ -->
<!-- <form method='get' action='' id='form_lang'>
        Select Language : <select name='lang' onchange='changeLang();'>
            <option value='english' <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'english') {
                                        echo "selected";
                                    } ?>>English</option>
            <option value='vietnamese' <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'vietnamese') {
                                            echo "selected";
                                        } ?>>Vietnamese</option>
        </select>
    </form> -->