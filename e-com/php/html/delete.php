<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- refresh pages -->
    <meta http-equiv="refresh" content="0;URL=query.php">
    <!--  -->
    <title>Delete</title>
</head>
<body>

    
</body>
</html>
<?php
include 'connect.php';
$id = $_GET['id'];
$path = $_GET['path'];
$sql = "delete from member where id_member = ".$id;
$result = mysql_query($sql);
if($result){
    echo "<script>alert('Delete Data Success') </script>";
}else{
    echo "<script>alert('Delete Data Fail') </script>";
}

//delete pic in folder 
if(@unlink($path)){//เป็นfuntion ใช้ในการลบไฟล์ //ลบไฟล์รูป //ลบpathสุดท้าย 
    
         echo "<script>alert('Delete Picture Success') </script>";
    }else{
        echo "<script>alert('Delete Picture Fail') </script>";
    }
$show = explode("/",$path);//function แยกสัญลักษณ์ต่างๆออกจากข้อมความ โดยใช้ / เป็นตัวแยก
$dir =$show[0]."/"$show[1];
//แบ่งข้อมความเก็บไว้ในตัวแปร array $show[0].$show[1].$show[2].
rmdir($dir);//functionในการลบdirectory




?>