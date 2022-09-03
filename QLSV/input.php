<?php
require_once ('dbhelp.php');

$s_HoTen = $s_code = $s_class = $s_gmail = $s_birthday = $s_sdt = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['hoten'])) {
		$s_fullname = $_POST['hoten'];
	}

	if (isset($_POST['code'])) {
		$s_code = $_POST['code'];
	}
	
	if (isset($_POST['class'])) {
		$s_class = $_POST['class'];
	}
	
	if (isset($_POST['gmail'])) {
		$s_gmail = $_POST['gmail'];
	}
	
	if (isset($_POST['birthday'])) {
		$s_birthday = $_POST['birthday'];
	}
	if (isset($_POST['sdt'])) {
		$s_sdt = $_POST['sdt'];
	}
	
	
	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$s_hoten = str_replace('\'', '\\\'', $s_hoten);
	$s_code = str_replace('\'', '\\\'', $s_code);
	$s_class = str_replace('\'', '\\\'', $s_class);
	$s_gmail = str_replace('\'', '\\\'', $s_gmail);
	$s_birthday = str_replace('\'', '\\\'', $s_birthday);
	$s_sdt = str_replace('\'', '\\\'', $s_sdt);
	$s_id = str_replace('\'', '\\\'', $s_id);

	if ($s_id != '') {
		//update
		$sql = "update qlsv set fullname = '$s_fullname', code = '$s_code', class = '$s_class', gmail = '$s_gmail', birthday = '$s_birthday', sdt = '$s_sdt' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into qlsv(fullname, code, class, gmail, birthday, sdt) value ('$s_fullname', '$s_code', '$s_class', '$s_gmail', '$s_birthday', '$s_sdt')";
	}

	execute($sql);

	header('Location: index.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from qlsv where id = '.$id;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList) > 0) {
		$std        = $studentList[0];
		$s_fullname = $std['fullname'];
		$s_code     = $std['code'];
		$s_class  	= $std['class'];
		$s_gmail  	= $std['gmail'];
		$s_birthday = $std['birthday'];
		$s_sdt  	= $std['sdt'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Student's Form</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$s_fullname?>">
					</div>
					<div class="form-group">
					  <label for="code">Student's ID:</label>
					  <input required="true" type="text" class="form-control" id="code" name="code" value="<?=$s_code?>">
					</div>
					<div class="form-group">
					  <label for="class">Class:</label>
					  <input required="true" type="text" class="form-control" id="class" name="class" value="<?=$s_class?>">
					</div>
					<div class="form-group">
					  <label for="gmail">Gmail:</label>
					  <input required="true" type="text" class="form-control" id="gmail" name="gmail" value="<?=$s_gmail?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Birthday:</label>
					  <input required="true" type="date" class="form-control" id="birthday" name="birthday" value="<?=$s_birthday?>">
					</div>
					<div class="form-group">
					  <label for="sdt">Phone Number:</label>
					  <input required="true" type="text" class="form-control" id="sdt" name="sdt" value="<?=$s_sdt?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
</body>
</html>
