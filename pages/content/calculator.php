<p><a href="index.php?page=Calculator&calPage=1">Tính toán</a></p>
<!-- <p><a href="index.php?page=Calculator&calPage=2">2: Tính điểm</a></p> -->

<?php
if (!isset($_GET['calPage'])) {
    $cPage = 1;
} else {
    $cPage = $_GET['calPage'];
}
?>

<?php
if ($cPage == 1) {
?>

    <div class="Calculate">
        <form action="" method="POST">
            <table border="1" style="width: 40%;">
                <tr>
                    <td>Input 1</td>
                    <td><input type="number" name="number1" /></td>
                </tr>
                <tr>
                    <td>Input 2</td>
                    <td><input type="number" name="number2" /></td>
                </tr>
                <tr>
                    <td>Phep tinh</td>
                    <td>
                        <input type="checkbox" name="plus" value="plus" style="margin-left: 30px;" /> +
                        <input type="checkbox" name="minus" value="minus" style="margin-left: 30px;" /> -
                        <input type="checkbox" name="mul" value="mul" style="margin-left: 30px;" /> *
                        <input type="checkbox" name="div" value="div" style="margin-left: 30px;" /> /
                    </td>
                </tr>
                <tr>
                    <td>Thuc thi</td>
                    <td><input type="submit" name="cal" value="Calculate" style="padding: 0 40px;"/></td>
                </tr>
            </table>
        </form>
    </div>


<?php
} elseif ($cPage == 2) {
?>
    <div class="Calculate">
        <form action="" method="POST">
            <table style="width: 40%;line-height: 1.5;">
                <tr>
                    <td>Ho va Ten</td>
                    <td><input type="text" name="fullName" /></td>
                </tr>
                <tr>
                    <td>Lop</td>
                    <td><input type="text" name="class" /></td>
                </tr>
                <tr>
                    <td>Diem M1</td>
                    <td><input type="number" name="pointM1" /></td>
                </tr>
                <tr>
                    <td>Diem M2</td>
                    <td><input type="number" name="pointM2" /></td>
                </tr>
                <tr>
                    <td>Diem M3</td>
                    <td><input type="number" name="pointM3" /></td>
                </tr>
                <tr>
                    <td>Tong diem</td>
                    <td><input type="text" name="combine" value="<?php
                                                                    if (isset($_POST['okCombine'])) {
                                                                        $m1 = $_POST['pointM1'];
                                                                        $m2 = $_POST['pointM2'];
                                                                        $m3 = $_POST['pointM3'];
                                                                        // $tong = $_POST['combine'];
                                                                        $tong = ($m1 * 0.3 + $m2 * 0.7) * 0.3 + $m3 * 0.7;
                                                                        //$tong = $m1+$m2+$m3;
                                                                        echo $tong;
                                                                    }
                                                                    ?>" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="okCombine" value="OK" /></td>
                    <td><input type="submit" name="cancelCombine" value="Cancel" /></td>
                </tr>
            </table>
        </form>
    </div>
<?php
}
?>
<?php
if (isset($_POST['cal'])) {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $plus = isset($_POST['plus']);
    $minus = isset($_POST['minus']);
    $mul = isset($_POST['mul']);
    $div = isset($_POST['div']);
    if ($plus) {
        $num3 = $num1 + $num2;
        echo $num1 . '+' . $num2 . '=' . $num3;
    } elseif ($minus) {
        $num3 = $num1 - $num2;
        echo $num1 . '-' . $num2 . '=' . $num3;
    } elseif ($mul) {
        $num3 = $num1 * $num2;
        echo $num1 . '*' . $num2 . '=' . $num3;
    } elseif ($div) {
        $num3 = $num1 / $num2;
        echo $num1 . '/' . $num2 . '=' . $num3;
    } else {
        echo 'Chon 1 phuong phap tinh';
        // còn lỗi chia cho 0, và chưa nhập 2 số đã chọn phép tính rồi ấn calculator
    }
}
?>