<?php
session_start ();
if(!isset($_SESSION[login_user]))
	header("location:error.php");
include '../dbutil/dbconfig.php';
include '../dbutil/medoo.php';
if ($_FILES ["image"] ["error"] > 0) {
	echo "Return Code: " . $_FILES ["image"] ["error"] . "<br />";
} else {
	$vol = $_POST [vol];
	$theme = $_POST [theme];
	$title = $_POST [title];
	$story = $_POST [story];
	$image = "uploads/images/" . $_FILES ["image"] ["name"];
	$data = [ 
			"vol" => $vol,
			"theme" => $theme,
			"image" => $image,
			"title" => $title,
			"story" => $story 
	];
	
	// �������ݿ�
	$db = new medoo ( $link_url );
	if (file_exists ( "../uploads/images/" . $_FILES ["image"] ["name"] )) {
		echo $_FILES ["image"] ["name"] . " already exists. ";
	} else {
		move_uploaded_file ( $_FILES ["image"] ["tmp_name"], "../uploads/images/" . $_FILES ["image"] ["name"] );
		if ($db->insert ( "vol", $data )){
			echo "��ӳɹ�,3�����ת����ѯҳ";
			?>
			<meta http-equiv="refresh" content="3;URL=showVol.php">
			<?php }
			else{
				echo "���ʧ�ܣ�3��󷵻����ҳ";
			?>
			<meta http-equiv="refresh" content="3;URL=addVol.php">
			<?php }
	}
}
?>