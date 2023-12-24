<form action="" method="POST" style="padding:10px;">
    <tr>
        <td>Nhap chieu dai thap n:</td>
        <td><input type="number" name="towerN" /></td>
    </tr>
    <tr>
        <td><input type="submit" name="ShowTowerN" value="Show" style="padding: 0 5px;" /></td>
    </tr>
</form>

<?php
if (isset($_POST['ShowTowerN'])) {
    $n = $_POST['towerN'];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo ' * ';
        }
        echo "</br>";
    }
}
?>