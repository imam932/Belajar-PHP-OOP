<?php
$id = $_GET['id'];
//echo $id;
require "./../config/Database.php";
$db = new Database;
$db_connect = $db->connect();
$sql = "SELECT * FROM registerr WHERE id='$id'";
$result = $db_connect->query($sql);
//var_dump($result->fetch_assoc());
?>
<html>
<body>
<form action="./../controller/insertregister.php" method="post">
<?php 
foreach ($result as $key => $value) {
?>
Name: <br>
  <input type="text" name="name" value="<?php echo $value['Nama']; ?>"><br>
No hp:<br> 
  <input type="number" name="nohp" value="<?php echo $value['No_hp']; ?>"><br>
Email:<br>
  <input type="email" name="email" placeholder="your email..." value="<?php echo $value['Email']; ?>"><br>
Jenis Kelamin : <br>
  <input type="radio" class="form-check-input" name="optradio"value="Pria"<?php ($value['Jenis_kelamin'] =='Pria') ? print 'checked' : '';?>>Pria 
  <input type="radio" class="form-check-input" name="optradio"value="perempuan"<?php ($value['Jenis_kelamin'] =='perempuan') ? print 'checked' : '';?>>perempuan
<br>Tanggal Lahir :
  <div class="form-group">
    <input type="date" class="form-control" name="ttl"value="<?php echo $value['Tanggal_lahir']; ?>">
  <div class="form-group">
    <label for="textarea">Alamat:</label><br>
      <textarea class="form-control" rows="3" id="textarea" name="alamat" ><?php echo $value['Alamat']; ?></textarea>
    </div>
Pasword : <br>
    <div class="form-group">
      <input type="password" placeholder="Password" class="form-control" id="password" name="password" value="<?php echo $value['Pasword']; ?>">
    </div>
      <input type="submit">
<?php } ?>
</form>
</body>
</html>