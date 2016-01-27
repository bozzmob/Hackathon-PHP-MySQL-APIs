<?php

$response = array(
    "error" => FALSE
);

$gentoken = md5(uniqid(mt_rand(), true));

if ((!empty($_POST['firstname'])) && (!empty($_POST['lastname'])) && (!empty($_POST['email'])) && (!empty($_POST['encrypted_password'])) && (!empty($_POST['mobilenumber']))) {
	$sql = "INSERT INTO users (firstname, lastname, email, encrypted_password, mobilenumber, token) VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . hash('sha512', $_POST['encrypted_password']) . "', '" . $_POST['mobilenumber'] . "' , '" . $gentoken . "')";
	
}

?>