<br>
<p>Su dung mang de tinh: hieu, tong, tich 2 ma tran</p>
<?php
$matrix1 = [];
$matrix2 = [];
$matrix3 = [];
?>

<h3>Nhap cap cua ma tran </h3>
<form action="" method="POST">
    <tr>
        <td>Row:</td>
        <td><input type="number" name="matRow" style="width: 60px;" /></td>
        <td>Column:</td>
        <td><input type="number" name="matCol" style="width: 60px;" /></td>
        <td><input type="submit" name="matrix" value="In" style="padding:0 5px;" /></td>
    </tr>
</form>


</br>
<?php
if (isset($_POST['matrix'])) {
    $matRow = $_POST['matRow'];
    $matCol = $_POST['matCol'];
    $_SESSION['matRow'] = $matRow;
    $_SESSION['matCol'] = $matCol;
?>
    <form action="" method="POST">
    <div class="matran"  style="display: flex;">
        <table style="width: auto;">
            <tr>
                <?php
                for ($i = 0; $i < $matRow; $i++) {
                ?>
            <tr>
                <?php
                    for ($j = 0; $j < $matCol; $j++) {
                ?>
                    <td><input style="width: 60px;" type="number" name="<?php echo 'subMatrix1' . $i . $j; ?>" value="" /></td>
                <?php
                    }
                ?>
            </tr>
        <?php
                }
        ?>
        </tr>
        </table>

        <table style="width:auto;">
            <tr>
                <?php
                for ($i = 0; $i < $matRow; $i++) {
                ?>
            <tr>
                <?php
                    for ($j = 0; $j < $matCol; $j++) {
                ?>
                    <td><input style="width: 60px;" type="number" name="<?php echo 'subMatrix2' . $i . $j; ?>" value="" /></td>
                <?php
                    }
                ?>
            </tr>
        <?php
                }
        ?>
        </tr>
        </table></div>
        <div class="end" style="text-align: center;">
            <input type="submit" name="resetMatrix" value="Nhap Lai" />
            <input type="submit" name="CalculateMatrix" value="Tinh" />
        </div>
    </form>


<?php
}
if (isset($_POST['CalculateMatrix'])) {
    $matRow1 = $_SESSION['matRow'];
    $matCol1 = $_SESSION['matCol'];
    echo 'KET QUA:' . '</br>' . '</br>';
    for ($i = 0; $i < $matRow1; $i++) {
        for ($j = 0; $j < $matCol1; $j++) {
            $matrix1[$i][$j] = $_POST["subMatrix1$i$j"];
            $matrix2[$i][$j] = $_POST["subMatrix2$i$j"];
        }
    }
?>
    <h3>Ma tran Tong:</h3>
    <table  style="width: auto;height: auto;text-align: left;margin-left: 20px;">
        <?php
        for ($i = 0; $i < $matRow1; $i++) {
        ?>
            <tr>
                <?php
                for ($j = 0; $j < $matCol1; $j++) {
                    $matrix3[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
                ?>
                    <td><?php echo $matrix3[$i][$j] ?> </td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>

    <h3>Ma tran Hieu:</h3>
    <table  style="width: auto;height: auto;text-align: left;margin-left: 20px;">
        <?php
        for ($i = 0; $i < $matRow1; $i++) {
        ?>
            <tr>
                <?php
                for ($j = 0; $j < $matCol1; $j++) {
                    $matrix3[$i][$j] = $matrix1[$i][$j] - $matrix2[$i][$j];
                ?>
                    <td><?php echo $matrix3[$i][$j] ?> </td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>

    <h3>Ma tran Tich:</h3>
    <table  style="width: auto;height: auto;text-align: left;margin-left: 20px;">
        <?php
        for ($i = 0; $i < $matRow1; $i++) {
        ?>
            <tr>
                <?php
                for ($j = 0; $j < $matCol1; $j++) {
                    $matrix3[$i][$j] = $matrix1[$i][$j] * $matrix2[$j][$i];
                ?>
                    <td><?php echo $matrix3[$i][$j] ?> </td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}
?>