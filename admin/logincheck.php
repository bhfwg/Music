<?php
session_start ();
include '../dbutil/medoo.php';
include '../dbutil/dbconfig.php';

$db = new medoo ( $link_url );
$login = "";
if (isset ( $_POST ["login"] )) {
	$login = $_POST ["login"];
	// header("location:index.php");
	echo "��ӭ��¼ ", "<br/>" . $login;
} else {
	echo "�Ƿ���¼��";
}
if ($login == "login") {
	$username = $_POST ["name"];
	$password = $_POST ["pw"];
	$data = [ 
			"username" => $username,
			"password" => $password 
	];
	// echo "$username ", "<br/>" . "$password" . "<br/>";
	if ($username != "" and $password != "") {
		$user = $db->select ( "users", "*", [ 
				"username" => $username 
		] )[0];
		if ($user ['password'] == $password) {
			$_SESSION ['login_user'] = $user;
			$_SESSION ['manage_tag'] = 1;
			header ( "location:main.php" );
		} else {
			$_SESSION ['manage_name'] = $username;
			$_SESSION ['manage_tag'] = 0;
			$_SESSION ["login_msg"] = "�û������������";
			header ( "location:login.php" );
		}
	} else {
		$_SESSION ['manage_name'] = $username;
		$_SESSION ['manage_tag'] = 0;
		$_SESSION ["login_msg"] = "�û���������Ϊ��";
		header ( "location:login.php" );
	}
}
?>

