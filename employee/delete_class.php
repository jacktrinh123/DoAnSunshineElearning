<?php
if (isset($_POST['ID'])) {
	$ID = $_POST['ID'];

	require_once ('dbhelp.php');
	$sql = 'delete from class where ID = '.$ID;
	execute($sql);

	echo 'Xoá lớp học thành công';
}