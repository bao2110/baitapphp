<?php
$link = mysqli_connect("localhost","root","","baitap") 
		or die("Không kết nối được với csdl");
		
$sql = "SELECT * FROM `taikhoan`";
$them = "INSERT INTO `taikhoan`(`username`, `pass`) VALUES ('user3','3')";
$data = mysqli_query($link, $them);
$noichuoi = "INSERT INTO `taikhoan`(`user`, `pass`) VALUES ('user" .$i. "','pass".$i."')";


$data = mysqli_query($link, $sql);

$row = mysqli_fetch_all($data);