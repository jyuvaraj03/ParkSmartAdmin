<?php 
session_start();

if (isset($POST['submit'])) {
	include_once 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $POST['password']);

	//error handlers

	if (empty($uid) || empty($pwd)) {
		header("Location: ../signin.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM user WHERE uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			header("Location: ../signin.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				if ($row['pwd'] != $pwd) {
					header("Location: ../signin.php?login=error");
					exit();
				} else {
					$_SESSION['username'] = $row['uid'];
					header("Location: ../signin.php?login=success");
					exit();
				}
			}
		} else {
			header("Location: ../signin.php?login=error");
			exit();
		}
	}
} else {
	header('Location: ../signin.php');
	exit();
}
