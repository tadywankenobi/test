<?php
//-------------------------------------------------------------------------------------
//	JibberBook v2.3
//	(c) 2009 Chris Jaure
//	license: MIT License
//	website: http://www.jibberbook.com/
//
//	index.php
//-------------------------------------------------------------------------------------

@session_start(); // start the session so we can get any form values or errors set by non-ajax users
require_once('inc/includes.php');
includes(array('actions/loadcomments.php', 'actions/transformxml.php'));

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TATA Challenge</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="theme/<?php echo JB_THEME ?>/style.css"/>
        <link rel="alternate" type="application/rss+xml" title="RSS" href="feed/" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.11/mootools-yui-compressed.js">
        </script>
        <script type="text/javascript" src="inc/jbscript.js">
        </script>
        <script type="text/javascript">
            var lang = {
                SERVER_ERROR: "<?php _e('An error has occurred.'); ?>",
                COMMENTS_LOADED: "<?php _e('All comments have been loaded.'); ?>",
                LOADING: "<?php _e('Loading...'); ?>",
                ERROR: "<?php _e('Your comment could not be added. Please try again later.'); ?>",
                COMMENTS_LOADING: "<?php _e('More comments are loading. If you are using the scrollbar, please release your mouse.') ?>"
            };
            window.addEvent('load', Guestbook.initialize.pass(['jb_addComment', 'jb_comments', 'jb_message', 'jb_loading_message', lang], Guestbook));
            new Asset.css('theme/<?php echo JB_THEME; ?>/style_js.css');
        </script>
</head>

<body>
<div id="wrapper">
  <div id="headerx"><img src="../images/header.jpg" width="800" height="236" /></div>
  <div id="navigation"><a href="../index.html" class="navfont">home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../abouttata.html" class="navfont">about tata</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../diary.html" class="navfont">diary</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../photographs.html" class="navfont">photographs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../patrons.html" class="navfont">patrons</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="navfont">guestbook</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../snippets.html" class="navfont">snippets</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../contact.html" class="navfont">contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../contact.html" class="navfont">contact</a></div>

<div id="contentx"><p class="mainheader"><br />
  <strong><img src="../images/headerguestbook.jpg" width="132" height="38" /></strong></p>
  
  <div id="container">
            
          <div id="jb_message" class="<?php _s('message_type'); ?>">
                <p>
                    <?php _s('message'); ?>
                </p>
            </div>
            <div id="content">
                <div id="primary">
                    <?php include('inc/templates/form.php'); ?>
                </div>
                <div id="secondary">
                    <h3>
                        <?php _e('Comments'); ?>
                    </h3>
                    <?php include('inc/templates/comments.php'); ?>
                </div>
                <div style="clear:both;">
                </div>
            </div>
            <div id="footer">
                <p>&nbsp;</p>
            </div>
        </div>
  
  
  
  
  
  
</div>
</div>
<div class="footerx">
<div class="footertext" id="footerbase">
  <p><a href="../index.html" class="footertext"><strong>home</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../abouttata.html" class="footertext"><strong>about tata</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../diary.html" class="footertext"><strong>diary</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../photographs.html" class="footertext"><strong>photographs</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../patrons.html" class="footertext"><strong>patrons</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="footertext"><strong>guestbook</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../snippets.html" class="footertext"><strong>snippets</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../contact.html" class="footertext"><strong>contact</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../sitemap.html" class="footertext"><strong>sitemap</strong></a></p>
  <p class="copyrighttext">Copyright 2009. TATA Challenge, All Rights Reserved</p>
</div>
</div>
<br /><br />
</body>
</html>

<?php
unset($_SESSION['message']);
unset($_SESSION['message_type']);
?>
