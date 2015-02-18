<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
  <link href="ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body id="page5">
<div id="main-tail">
  <div id="main-bg-top">
    <div id="main-bg-bot">
      <div id="main">
        <!-- header -->
        <div id="header">
          <img id="logo" src="images/logo.gif" />
          <ul id="navi">
<li><img src="images/icon-mail.gif" alt="" /><a href="contact.php">E-mail</a></li>
          </ul>
          <ul id="menu">
          <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="recruitment.html">Recruitment</a></li>
            <li><a href="innovation.html">Innovation</a></li>
            <li><a class="act" href="contact.php">Contact Us</a></li>
          </ul>
        </div>
        <!-- content -->
        <div id="content">
          <div class="row-1">
            <div class="line-ver-1">
              <div class="wrapper">
                <div class="col-1">
                  <h2 class="extra">How Can We Help You?</h2>
                  <p class="extra-2">Whatever your Gas, Electrical or Plumbing requirement we can help. From domestic services to corporate contracts our engineers are fully qualified and experienced in all the main utilities.</p>
                  <div class="clear"></div>
                  <div class="line-hor"></div>
                  <h2>How To Find Us</h2>
                  <div class="wrapper">
                    <div class="block-1"> <img src="images/map.jpg" width="280" height="175" /> </div>
                    <div class="block-2">
                      <p class="extra-2">Unit 10,<br />Six Harmony Row,<br />
                        Glasgow, G51 3BA.</p>
                      <p>Telephone: 0141 445 4422<br />
                        E-mail: <a href="#">info@albagas.co.uk</a> </p>
                    </div>
                  </div>
                  <div class="line-hor"></div>
                  <h2>Contact Form</h2>
                  <?PHP
require_once "formvalidator.php";
$show_form=true;
if(isset($_POST['Submit']))
{
    $validator = new FormValidator();
    $validator->addValidation("Name","req","Please fill in your name");
    $validator->addValidation("Email","email","Please provide a valid email address");
    $validator->addValidation("Email","req","Please provide your address");
	$validator->addValidation("Message","req","Please submit an enquiry");
    if($validator->ValidateForm())
    {
		$to = "info@albagas.co.uk";
		$subject = "Web Enquiry";
		$name_field = $_POST['Name'];
		$email_field = $_POST['Email'];
		$message = $_POST['Message'];
		$header = "From: $name_field < $email_field >\r\n";
 		$body = "From: $name_field\nE-Mail: $email_field\nMessage:\n$message"; 
    	echo "<p>Thank you for contacting us, your enquiry has been submitted. We will be in touch shortly.</p>";
		mail($to, $subject, $body, $header);
    	$show_form=false;
    }
    else
    {
        $error_hash = $validator->GetErrors();
        foreach($error_hash as $inpname => $inp_err)
        {
            echo "<p id='error'>$inp_err</p>\n";
        }        
    }
}
if(true == $show_form)
{
?>
                  <p class="extra-2">For a no obligation quote contact us on the above telephone number or simply fill out your details on the form below and email us your message, then one of our team will then contact you regarding your request.</p>
                  <div class="wrapper"><form method='POST' action='' id="contact-form" accept-charset='UTF-8'>
<strong><span>Enter Your Message:</span>
                      <textarea name="Message" rows="" cols=""></textarea>
                      </strong>
                      <label><span>Enter Your Name:</span>
                        <input name="Name" type="text" value="" />
                      </label>
                      <label><span>Enter Your E-mail:</span>
                        <input name="Email" type="text" value="" />
                      </label>
                                        <input type='submit' class="submit" id="submit" name='Submit' value='Submit'> 
                  </form></div>

                    <?PHP
}//true == $show_form
?>
<div class="clear"></div>
                </div>
                <div class="col-2">
                  <h2 class="extra">Areas Covered</h2>
                    <p>Predominantly West and Central Scotland, although we are available in all of Scotland and Northern England.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer -->
        <div id="footer">
          <div>

            <ul style="float:left; width:auto;">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="recruitment.html">Recruitment</a></li>
<li><a href="innovation.html">Innovation</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
<span class="privacy"><a href="privacy.html">Privacy Policy</a>&nbsp;|&nbsp;<a href="privacy.html">Terms of Use</a></span>
            <p class="copyright" style="clear:both; float:right;">Designed &amp; Built by Buzz Digital &copy; 2010</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5635416-25");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
