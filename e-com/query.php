<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Show report</title>
<link rel="stylesheet" type="text/css" href="main.css">
<script>
  function loadPage(){
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("insert").innerHTML = this.responseText;

    }
  };
  xhttp.open("GET", "formRegis.php");
  xhttp.send();
  }
</script>
</head>

<body>

<table width="537" border="2" class="table table-hover table-dark" align="center" >
  <tr>
    <td>id_member </td>
    <td>username</td>
    <td>password</td>
    <td>name</td>
    <td>gender</td>
    <td>graduate</td>
    <td>sport|music|computer</td>
    <td>upload</td>
     <td>update</td>
    <td>delete</td>
  </tr>
  <?php
  include 'connect.php';
  $sql = "select * from member ORDER BY id_member ASC";
  $result = mysql_query($sql) or die(mysql_error());
  while ($row=mysql_fetch_array($result))//ดึงข้อมูลออกมาจาก array $result ทีละ record 
  {?>
  <tr>
  	<td align="center"><?php echo $row["id_member"];?></td>
    <td align="center"><?php echo $row["username"];?></td>
    <td align="center"><?php echo $row["password"];?></td>
    <td align="center"><?php echo $row["name"];?></td>
    <td align="center">
	<?php
		if($row["gender"]==1){
			echo "ผู้ชาย";
		}else{
			echo "ผู้หญิง";
		}
	?>
    </td>
    <td align="center">
	<?php
		if($row["graduate"]==1){
			echo "มัธยมปลาย";
		}else{
			echo "ปริญญาตรี";
		}
	?>
    </td>
    <td align="center">
	<?php if($row["sport"]==1){
		echo "กีฬา";
	}
	?>
	<?php if($row["music"]==1){
		echo "ดนตรี";
	}
	?>
	<?php if($row["computer"]==1){
		echo "คอมพิวเตอร์";
	}
	?>
    </td>
    <td align="center">
    <a href="<?php echo $row["upload"];?>">
	<img src="<?php echo $row["upload"];?>" width="100px" height="100px"> <a/>
    </td>
    <td align="center">
      <a href="formupdate.php?id=<?php echo $row["id_member"]?>&path=<?php echo $row["upload"]?>">แก้ไข</a>
    </td>
    <td align="center">
      <a href="delete.php?id=<?php echo $row["id_member"]?>&path=<?php echo $row["upload"]?>">ลบ</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
<div id='insert'></div>
<button id="btnInsert" onclick="loadPage()" >Insert</button>
</body>
</html>