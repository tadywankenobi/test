<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TATA Challenge</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="wrapper">
  <div id="header"><img src="../images/header.jpg" width="800" height="236" /></div>
  <div id="navigation"><a href="../index.html" class="navfont">home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../abouttata.html" class="navfont">about tata</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../diary.html" class="navfont">diary</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../photographs.html" class="navfont">photographs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../patrons.html" class="navfont">patrons</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="navfont">guestbook</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../thebook.html" class="navfont">the book</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../contact.html" class="navfont">contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../contact.html" class="navfont">contact</a></div>

<div id="content"><p class="mainheader"><br />
  <strong><img src="../images/headerguestbook.jpg" width="132" height="38" /></strong></p>
  
  <div id="container">
            
         <?php
/****************************************************************************
 * DRBGuestbook
 * http://www.dbscripts.net/guestbook/
 * 
 * Copyright © 2007-2009 Don B
 ****************************************************************************/

$base_url = "./";
require_once(dirname(__FILE__) . '/includes/utils.php');
require_once(dirname(__FILE__) . '/includes/challenge.php');
require_once(dirname(__FILE__) . '/includes/guestbook.php');
require_once(dirname(__FILE__) . '/includes/views.php');
require_once(dirname(__FILE__) . '/config.php');
require_once(dirname(__FILE__) . '/strings.php');

// Confirm that application is fully installed
confirm_install();

// Handle actions
if(isset( $_GET["action"] )) {
	
	$action = $_GET["action"];
	
	switch($action) {
		
		case "challengeimage":
			outputChallengeImage();
			break;
		
		default:
			die("Invalid request.");
			break;
		
	}
	
} else if(isset( $_POST["action"] )) {
	
	$action = $_POST["action"];
	
	switch($action) {
		
		case "add":
		
			// Undo magic_quotes
			if(get_magic_quotes_gpc()) {
				$_POST = stripslashes_recursive($_POST);
			}
		
			if(!is_banned($_SERVER['REMOTE_ADDR']) && guestbook_add($_POST)) {
				include_from_template('added.php');
			} else {
				show_entries_page();
			}
			break;
			
		default:
			
			show_entries_page();
			break;
		
	}
	
} else {

	show_entries_page();
	
}

?>

        </div>
  
  
  
  
  
  
</div>
</div>
<div class="footer">
<div class="footertext" id="footerbase">
  <p><a href="../index.html" class="footertext"><strong>home</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../abouttata.html" class="footertext"><strong>about tata</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../diary.html" class="footertext"><strong>diary</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../photographs.html" class="footertext"><strong>photographs</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../patrons.html" class="footertext"><strong>patrons</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="footertext"><strong>guestbook</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../thebook.html" class="footertext"><strong>the book</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../contact.html" class="footertext"><strong>contact</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../sitemap.html" class="footertext"><strong>sitemap</strong></a></p>
  <p class="copyrighttext">Copyright 2009. TATA Challenge, All Rights Reserved</p>
</div>
</div>
<br /><br />
</body>
</html>


