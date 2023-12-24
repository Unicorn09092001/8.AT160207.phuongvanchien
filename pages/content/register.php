

<?php
if (isset($_POST['submit'])) {
?>
    <h3>Kết quả đăng ký :</h3>
<?php
    $name = $_POST['name'];
    $add = $_POST['address'];
    $job = $_POST['job'];
    $note = $_POST['note'];
    echo 'Tên: ' . $name . '</br>' . '</br>';
    echo 'Địa chỉ: ' . $add . '</br>' . '</br>';
    echo 'Nghề nghiệp: ' . $job . '</br>' . '</br>';
    echo 'Ghi chú: ' . $note . '</br>' . '</br>';
}
?>

<style>
    .register {
        width: 50%;
        padding: 50px 100px;
    }

    .register>h3 {
        text-align: center;
        margin-bottom: -50px;
    }

    .register>form {
        text-align: center;
    }

    .register>form>table {
        width: 75%;
        text-align: left;
        margin-left: auto;
        margin-right: auto;
    }

    .register>form>table td:nth-child(1) {
        /* nên để đường dẫn cụ thể để ko ảnh hưởng đến file khác */
    }

    td:nth-child(2) {}

    input {}

    textarea {
        width: 170px;
    }
</style>
<div class="register">
    <h3 style="">Form Dang Ky</h3>
    <form style="" action="" method="POST">
        <table>
            <tr>
                <td>Tên:</td>
                <td><input type="text" name="name"></td>
            </tr>
            </br>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="address"></td>
            </tr>
            </br>
            <tr>
                <td>Nghề nghiệp:</td>
                <td><input type="text" name="job"></td>
            </tr>
            </br>
            <tr>
                <td>Ghi chú:</td>
                <td><textarea row="2" name="note"></textarea></td>
            </tr>
            </br>
            <tr>
                <td><button style="margin-left: 40px;padding:0 5px;">Xoa</button></td>
                <td><input type="submit" name="submit" value="Dang Ky" style="padding: 0 5px;"></td>
            </tr>
        </table>
    </form>
</div>
