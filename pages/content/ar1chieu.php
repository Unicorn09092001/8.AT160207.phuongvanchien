<br>
<p>
    Thao tac tren mang 1 chieu:
    <br>
    <br>
    Bai toan: Nhap vao chuoi so: tinh tong cac so, gia tri trung binh, tim min-max, trung binh cong
</p>
<?php
$array = [];
?>
 <br>
<h3>Chuoi so muon nhap co bao nhieu so: </h3>
<form action="" method="POST" style="margin-top: -30px;width: 40%;  ">
    <table>
        <tr>
            <td><input type="number" name="chuoiSo" /></td>
            <td><input type="submit" name="array" value="In" style="padding: 0 5px;"/></td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['array'])) {
    $arr = $_POST['chuoiSo'];
    $_SESSION['array'] = $arr;

?>
    <form action="" method="POST">
            <tr>
                <?php
                for ($i = 0; $i < $arr; $i++) {
                ?>
                    <td><input style="width: 50px;" type="number" name="<?php echo 'subArr' . $i; ?>" value="" /></td>
                <?php
                }
                ?>
            </tr>
            <br>
            <tr>
                <td><input type="submit" name="resetArr" value="Reset" /></td>
                <td><input type="submit" name="CalculateArr" value="Calculate" /></td>
            </tr>
    </form>


<?php
}
if (isset($_POST['CalculateArr'])) {
    $arr1 = $_SESSION['array'];
    $tong = 0;
    $TBC = 0;
    $min = $_POST['subArr1'];
    $max = $_POST['subArr1'];
    for ($i = 0; $i < $arr1; $i++) {
        $array[$i] = $_POST["subArr$i"];
        $tong += $array[$i];
        if ($min > $_POST["subArr$i"]) {
            $min = $_POST["subArr$i"];
        }
        if ($max < $_POST["subArr$i"]) {
            $max = $_POST["subArr$i"];
        }
    }
    echo 'KET QUA:' . '</br>';
    echo 'Tong: ' . $tong . '</br>';
    echo 'Trung binh Cong: ' . $tong / $arr1 . '</br>';
    echo 'Min: ' . $min . '</br>';
    echo 'Max: ' . $max . '</br>';
}
if (isset($_POST['resetArr'])) {
    $arr2 = $_SESSION['array'];
    for ($i = 0; $i < $arr2; $i++) {
        $_POST["subArr$i"] = '';
    }
}

?>