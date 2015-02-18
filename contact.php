<?php
					
	function cleanUp($myString){
		$cleanString = '';
		$cleanString = strip_tags($myString);
		return $cleanString;
	}
	
	
	if(isset($_POST['submit'])){
		
		$nameValid = false;
		$emailValid = false;
		$messageValid = false;
		
		if(strlen(cleanUp($_POST['nameInput']))>0 && cleanUp($_POST['nameInput']) != 'Name'){
			$nameValid = true;
		}
		
		if (filter_var(cleanUp($_POST['emailInput']), FILTER_VALIDATE_EMAIL)) {
			$emailValid = true;
		}
		
		if(strlen(cleanUp($_POST['messageInput']))>0 && cleanUp($_POST['messageInput']) != 'Message'){
			$messageValid = true;
		}
		
		if($nameValid && $emailValid && $messageValid){
			$to = "janis@buzzagency.co.uk";
			$subject = "Enquiry"."\n\n";
			$message = cleanUp($_POST['nameInput']);
			$message .= "\n\n";
			$message .= cleanUp($_POST['messageInput']);
			$message .= "\n\n";
			$message .= cleanUp($_POST['emailInput']);
			$from = cleanUp($_POST['emailInput']);
			$headers = "From:" . $from;
			mail($to,$subject,$message,$headers);
			header( 'Location: contact-success.php' );
		}
		
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Albas Gas - Contact</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body class="sectionContact">

	<div class="wrapper">
		<?php $hideFreeQuote=true; require_once 'inc/banner.php'; ?>
		
		<?php require_once 'inc/nav-top.php'; ?>
		
		<div class="breadCrumbs">
			You are here > <a href="index.php">Home</a> > <a href="">Contact Us</a>
		</div>
		
		<div class="layout2">
			<div class="column1">
				<?php include 'inc/nav-side-contact.php'; ?>
			</div>
			<div class="column2">
				<img src="img/contact-image-01.jpg" style="margin:0 0 20px 0;" alt=""/>
				
				<img class="imgRight" src="img/contact-image-02.jpg" alt=""/>
				
				<p>Unit 10, Six Harmony Row, Glasgow, G51 3BA.<br/>
				Gas Safe Registration No. 218421.</p>
				
				<p>Telephone: 0141 445 4422<br/>
				E-mail: <a href="mailto:info@albagas.co.uk">info@albagas.co.uk</a></p>
				
				<div class="contactForm">
				
				<script>
					function onClickHandler(myInput){
						var myElement = document.getElementById(myInput);
						//window.alert(myElement.value)
						switch(myInput){
							case 'nameInput':
								if(myElement.value == 'Name'){
									myElement.value = '';
								}
								if(document.getElementById('emailInput').value == ''){
									document.getElementById('emailInput').value = 'Email';
								}
								if(document.getElementById('messageInput').value == ''){
									document.getElementById('messageInput').value = 'Message';
								}
								break;
							case 'emailInput':
								if(myElement.value == 'Email'){
									myElement.value = '';
								}
								if(document.getElementById('nameInput').value == ''){
									document.getElementById('nameInput').value = 'Name';
								}
								if(document.getElementById('messageInput').value == ''){
									document.getElementById('messageInput').value = 'Message';
								}
								break;
							case 'messageInput':
								if(myElement.value == 'Message'){
									myElement.value = '';
								}
								if(document.getElementById('nameInput').value == ''){
									document.getElementById('nameInput').value = 'Name';
								}
								if(document.getElementById('emailInput').value == ''){
									document.getElementById('emailInput').value = 'Email';
								}
								break;
						}
					}
				</script>
				
				<h1 style="color:#E1242D">How Can We Help You?</h1>
				
				<p>Whatever your Gas, Electrical or Plumbing requirement we can help. From domestic services to corporate contracts our engineers are fully qualified and experienced in all the main utilities.</p>

				<p>For a no obligation quote contact us on the above telephone number or simply fill out your details on the form below and email us your message, then one of our team will then contact you regarding your request.</p>
				
				<form method="post" style="float:left;">
				
					<?php
						if($_POST['submit']){
							echo '<p>';
							if(!$nameValid){
							echo '<span class="error">Please enter a name</span><br/>';
							}
							if(!$emailValid){
								echo '<span class="error">Please enter a valid email</span><br/>';
							}
							if(!$messageValid){
								echo '<span class="error">Please enter a message</span><br/>';
							}
							echo '</p>';
						}
						
					?>
					
					<table>
						<tr>
							<td><input id="nameInput" name="nameInput" value="<?php if($_POST['nameInput']!=''){echo $_POST['nameInput'];} else{echo 'Name';} ?>" onClick="onClickHandler('nameInput')" onChange="onChangeHandler('nameInput')" /></td>
						</tr>
						<tr>
							<td><input id="emailInput" name="emailInput" value="<?php if($_POST['emailInput']!=''){echo $_POST['emailInput'];} else{echo 'Email';} ?>" onClick="onClickHandler('emailInput')" onChange="onChangeHandler('emailInput')" /></td>
						</tr>
						<tr>
							<td><textarea id="messageInput" name="messageInput" rows="10" onClick="onClickHandler('messageInput')" onChange="onChangeHandler('messageInput')"><?php if($_POST['messageInput']!=''){echo $_POST['messageInput'];} else{echo 'Message';} ?></textarea></td>
						</tr>
						<tr>
							<td><input name="submit" type="submit" value="Send" /></td>
						</tr>
					</table>
				</form>
				
				<?php include 'inc/google-map.php'; ?>
				</div><!--contactForm-->
				
			</div><!--column2-->
			
			<div class="column3">
				<?php include 'inc/features-side.php'; ?>
			</div>
		</div>
		
		<?php require_once 'inc/footer.php'; ?>
		
	</div>

</body>
</html>