<?php
session_start();

define("host", "localhost");
define("user", "root");
define("password", "");
define("db", "forms");

$connect = mysql_connect(host, user, password);
if(!$connect) die ("connection not established" .mysql_error());

mysql_select_db(db, $connect);


function testinput($data) {
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = trim($data);
	return $data; 
}


if ($_POST) {
	// Make sure we recieved each input or the application will break
	$reqInputs = ['firstname', 'lastname', 'currentyear', 'email', 'tel', 'yearsjoined', 'fees'];
	foreach($reqInputs as $x) {
		if (!isset($_POST[$x])) {
			header("location: fill_form.php?error=1&message=1003&item-name=$x");
			//1003 stands for insufficient credentials
			exit;
		}
	}

	$firstname   = testinput($_POST['firstname']);
	$lastname    = testinput($_POST['lastname']);
	$currentyear = testinput($_POST['currentyear']);
	$email       = testinput($_POST['email']);
	$contact     = testinput($_POST['tel']);
	$yearsjoined = testinput($_POST['yearsjoined']);
	$fees        = testinput($_POST['fees']);
	}

	if (!is_numeric($contact)) {
		header("location: fill_form.php?error=1");
		exit;
	}


	$query1=mysql_query("SELECT * FROM information WHERE `email`='".$email."'") or die(mysql_error());
	if(mysql_num_rows($query1) >= 1)
	{
		header("location: fill_form.php?error=2");
		exit;
	}


	

	$_SESSION['firstname'] = $firstname;
	$_SESSION['lastname'] = $lastname;
	$name = $_SESSION['firstname'] . " " . $_SESSION['lastname'];

	//Update database
	$query = "INSERT INTO information(name,current,email,contact,joinedfor,fees)
		VALUES('$name','$currentyear','$email','$contact','$yearsjoined','$fees');";
	$sql = mysql_query($query);

	if (!$sql) {
		echo mysql_error();
		exit;
	} 
	else 
	{
		echo "Your response has been recorded";


/*t(		$_SESSION['firstname'] = $firstname;
		$_SESSION['lasttname'] = $lastname;
		
		*/
	}

	mysql_close($connect);
	header("location : index.html");
?>
