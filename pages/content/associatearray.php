<form action="" method="POST" enctype="multipart/form-data" style="margin: 10px;">
   <input type="file" name="image" style="padding: 0 5px;"/>
   <input type="submit"  style="padding: 0 5px;"/>
</form>

<?php
if (isset($_FILES['image'])) {
   $errors = array();
   $file_name = $_FILES['image']['name'];
   $file_name = time() . '_' . $file_name;
   $file_size = $_FILES['image']['size'];
   $file_tmp = $_FILES['image']['tmp_name'];
   $file_type = $_FILES['image']['type'];
   $file_ext = strtolower(end(explode('.', $file_name)));

   $expensions = array("jpeg", "jpg", "png");
   move_uploaded_file($file_tmp, 'uploads/' . $file_name);

   if (in_array($file_ext, $expensions) === false) {
      $errors[] = '<p style="color:red;font-weight:500;"> Chỉ hỗ trợ upload file JPG hoặc PNG.</p>';
   }

   if ($file_size > 2097152) {
      $errors[] = '<p style="color:red;font-weight:500;"> Kích thước file không được lớn hơn 2MB</p>';
   }

   if (empty($errors) == true) {
      move_uploaded_file($file_tmp, "img/" . $file_name);
      echo '<p style="color:green;font-weight:550;"> Success</p>'; ?>
      <ul style="list-style: none;">
         <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
         <li>File size: <?php echo $_FILES['image']['size'];  ?>
         <li>File type: <?php echo $_FILES['image']['type']; ?>
      </ul>
<?php
   } else {
      foreach($errors as $item){
         echo $item . "\n";
     }
   }
}
?>