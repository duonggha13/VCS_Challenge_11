<!DOCTYPE html>
<html>

<?php
	require 'user.php';
	session_start();
	$username = $_POST['username'];
	$email = $_POST['email'];
	$yearOfBirth = $_POST['yearOfBirth'];
	$sex = $_POST['sex'];
	$user = new User();
	$user->setUsername($username);
	$user->setEmail($email);
	$user->setYearOfBirth($yearOfBirth);
	$user->setSex($sex);
	$_SESSION['user'] = serialize($user);
	$serializeUser = $_SESSION['user'];
	$_SESSION['base64Code'] = base64_encode($serializeUser);
?>

<body>
    <div class="container">
    	<form action="deserialization.php" method="post" name="submit_form">
            <div>
                <label>Base64 Code: </label> <br>
        		<input type="text" value="<?php echo $_SESSION['base64Code']; ?>">
            </div>
            <div>
                <button type="submit" name="submit">Decode</button>
            </div>
        </form>
    </div>
</body>
</html>
