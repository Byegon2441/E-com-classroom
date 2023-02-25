<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Register</title>
</head>

<body>

<?php
include 'connect.php';
$id = $_GET["id"];
$path = $_GET['path'];
$sql = "select * from member where id_member = '$id' ";//ORDER BY id_member ASC
$result = mysql_query($sql)  or die(mysql_error());
$row=mysql_fetch_array($result)//ดึงข้อมูลออกมาจาก array $result ทีละ record 

?>
    <center>
<form action="update.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="714" border="2">
    <tr>
      <td height="51" colspan="3" align="center">แบบฟอร์มรับสมัคร</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CC6633">step : 1 ข้อมูล login</td>
    </tr>
    <tr>
      <td width="133">username :</td>
      <td width="314"><input name="username" type="text" id="username" size="50" value="<?php echo $row['username']?>"/></td>
      <td width="243" rowspan="2" align="center">หมายเหตุ : ระบบจะใช้ username ในการเข้าสู่ระบบครั้งต่อไป</td>
    </tr>
    <tr>
      <td>password :</td>
      <td><input name="password" type="password" id="password" size="50" value="<?php echo $row['password']?>"/> </td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CC6633">step : 2 ข้อมูลส่วนตัว</td>
    </tr>
    <tr>
      <td>ชื่อ - สกุล :</td>
      <td><input name="name" type="text" id="name" size="50" value="<?php echo $row['name']?>"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>เพศ :</td>
      <td><p>
        <label>
          <input name="gender" type="radio" id="gender_0" value="1" <?php if($row['gender']==1) {echo 'checked';}?>/>
          ชาย</label>
        <label>
          <input type="radio" name="gender" value="2" id="gender_1" <?php if($row['gender']==2) {echo 'checked';}?>/>
          หญิง</label>
        <br />
      </p></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>การศึกษาสูงสุด :</td>
      <td><select name="graduate" id="graduate">
        <option value="1" <?php if($row['graduate']==1) {echo 'selected';}?> >มัธยมปลาย</option>
        <option value="2" <?php if($row['graduate']==2) {echo 'selected';}?>>ปริญญาตรี</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>ความสามารถพิเศษ :</td>
      <td><input name="sport" type="checkbox" id="sport" value="1" <?php if($row['sport']==1) {echo 'checked';}?> />
        กีฬา 
        <input name="sport2" type="checkbox" id="sport2" value="1" <?php if($row['music']==1) {echo 'checked';}?>/>
        ดนตรี 
        <input name="sport3" type="checkbox" id="sport3" value="1" <?php if($row['computer']==1) {echo 'checked';}?>/>
        คอมพิวเตอร์</td>
      <td align="center">ตอบได้มากกว่า 1 ข้อ</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CC6633">step : 3 อัพโหลดเอกสาร</td>
    </tr>
    <tr>
      <td> </td>
      <td><img src="<?php echo $row['upload']?>" height="100" width="100">
          <input name="upload" type="file" id="upload" size="40" /></td>
      <td align="center">อัพโหลดเฉพาะไฟล์</td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input type="submit" name="button" id="button" value="ตกลง" />
        &nbsp;&nbsp;&nbsp;
<input type="reset" name="button2" id="button2" value="ยกเลิก" /></td>
    <input type="hidden" name="id" id="id" value="<?php echo $row['id_member']?>">
    <input type="hidden" name="hidden2" id="hidden2" value="<?php echo $row['upload']?>">
    </tr>
  </table>
</form>
</center>
</body>
</html>