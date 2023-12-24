<div class="drawTable" style="  width:70%; padding: 10px 100px 0 100px;line-height: 1.5;">
    <p style="text-align: center;">Trang DrawTable <br> Form ve bang</p>
    <form method="POST">
        <table style="width: 45%;margin-top: -50px;">
            <tr>
                <td>So dong:</td>
                <td><input type="number" id="row" class="drawTbl" name="row" value="<?php if (isset($_POST['retype'])) {
                                                                                        echo '';
                                                                                    } ?>" /></td>
            </tr>
            </br>
            <tr>
                <td>So cot:</td>
                <td><input type="number" id="column" class="drawTbl" name="column" value="<?php if (isset($_POST['retype'])) {
                                                                                                echo '';
                                                                                            } ?>" /></td>
            </tr>
            </br>
            <tr>
                <!-- <td><input type="button" onclick="reType()" name="retype" value="Nhap Lai" /></td>
            <td><input type="button" onclick="return createTable()" name="draw" value="Ve" /></td> -->
                <td><input type="submit" name="retype" value="Nhap Lai" style="padding: 0 5px;" /></td>
                <td><input type="submit" name="draw" value="Ve" style="padding: 0 5px;" /></td>
            </tr>
        </table>
    </form>
</div>
<br>
<?php
if (isset($_POST['draw'])) {
    $row = $_POST['row'];
    $col = $_POST['column'];
?>
    <table border="1" style="width:900px;">
        <?php
        for ($i = 0; $i < $row; $i++) {
        ?>
            <tr>
                <?php
                for ($j = 0; $j < $col; $j++) {
                    if ($i >= $j) {
                ?>
                        <td style="width: 10px;"><?php echo $j + 1; ?></td>
                    <?php
                    } else {
                    ?>
                        <td style="width: 10px;"> </td>
                <?php
                    }
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