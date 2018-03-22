<?php
require_once 'config.php';
    
    $msg = '';
    $target = "images/".basename($_FILES['logo']['name']);


	$first = $_POST['first'];
	$last = $_POST['last'];
	$compName = $_POST['compName'];
	$compAddress = $_POST['compAddress'];
	$phoneNum = $_POST['phone'];
	$bio = $_POST['bio'];
	$compLogo = mysql_real_escape_string(addslashes(file_get_contents($_FILES['logo']['tmp_name'])));
	$compLogoName = mysql_real_escape_string(addslashes($_FILES['logo']['name']));

	$sql = "INSERT INTO user_info (first, last, compname, compaddress, telephone, bio , logo, logoName) VALUES ('$first', '$last', '$compName', '$compAddress', '$phoneNum', '$bio', '$compLogo', '$compLogoName')";
	$result = mysqli_query($conn, $sql);

	if (move_uploaded_file($_FILES['logo']['tmp_name'], $target)) {

		$msg = "File was uploaded succcessfully";
		echo $msg;
	}else{
		echo "There was an error uploading your image please contact us";
	}

	header("Location: register.php");
	
 ?>
