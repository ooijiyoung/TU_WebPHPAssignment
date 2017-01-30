<html>
<head></head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $telErr = $msgErr = $formError = "";
$name = $email = $telno = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if(empty($_POST["name"])){
		$nameErr = "Please Enter name";
	}else{
		$name = sanitize($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		$nameErr = "Only letters and white space allowed"; 
		}
	}
	
	if(empty($_POST["email"])){
		$emailErr = "Please enter email";
	}else{
		$email = sanitize($_POST["email"]);
		//validation handled by HTML5
	}
	
	if(empty($_POST["telno"])){
		//optional field
	}else{
		$telno = sanitize($_POST["telno"]);
		if (!preg_match("/^[0-9 ]*$/",$telno)) {
		$telErr = "Only numbers allowed"; 
		}		
	}
	
	if (empty($_POST["msg"])) {
		$msgErr = "Please select a language";
	} else {
		$msg = sanitize($_POST["msg"]);
	}
	
	if($nameErr == "" && $emailErr == "" && $telErr == "" && $msgErr == "" && $msgErr == "")
		echo("Ok");
	else
		$formError = "<span class='formErrorMsg'><br>Please check all fields before submitting!<br></span>";
	
	
}
	

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<fieldset><legend>Enter your information in the form below:
	</legend>
	<label for="fname">Name:</label>
    <input type="text" id="fname" name="name" value="<?php echo $name;?>" /></input>
    <div class="formErrorMsg">
    <?php echo $nameErr;?><br><br>
    </div>

    <label for="mail">E-mail:</label>
    <input type="email" id="mail" name="email"  value="<?php echo $email;?>" /></input>
    <div class="formErrorMsg">
    <?php echo $emailErr;?><br><br>
    </div>

    <label for="telno">Phone Number:</label>
    <input type="tel" id="telno" placeholder="Optional" name="telno" value="<?php echo $telno;?>" /></input>
    <div class="formErrorMsg">
    <?php echo $telErr;?><br><br>
    </div>
	
    <label for="msg">Message:</label>
    <textarea id="msg" name="msg" value="<?php echo $msg;?>" ></textarea>
	<div class="formErrorMsg">
    <?php echo $msgErr;?><br><br>
    </div>
	<?php echo $formError;?>
	
	
	</fieldset>
	<center><?php echo $formError;?> <br><input type="submit" value="Submit My Information"></center>
	
	</form>
	
	<?php
	function showData($name,$email,$gender,$age,$language,$comment){
		echo("Inputed Data: <br>");
		echo("Name: $name <br> Email: $email <br>");
		echo("Gender: $gender<br> Age: $age <br> Language:<br>");
		for($i=0; $i < count($language); $i++){
			echo("$language[$i] <br>");
		}
		echo("Comemnts: $comment");
	}
	
	
	?>
</body>
</html>