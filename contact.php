<?php include('header.php') ?>

<div id="content">
<p><br /><strong><img src="images/headercontact.jpg" width="96" height="38" /></strong>
</p>
<div id="contentright">
  <span class="headerfont1">Marianne Du Toit</span><br />
    Email: <a href="mailto: hello@tatachallenge.com" class="pagetext">hello@tatachallenge.com</a>
  <p>Liendi Publishing<br />
    Molyneaux House<br />
    Bridestreet<br />
    Dublin 8<br />
    <strong>Ireland</strong></p>
  <p>&nbsp;</p>
</div>
<div id="contentleftform"><div id="formfield">
<form method="post" action="register.php" onReset="return reset_confirm()">
         <span class="navfont">Contact Form</span><br />
        <br />
        <div class="subtext" id="divformname"><strong>Full Name: </strong></div>
          <div id="divformcontent">
            <input name="Name" type="text" size="40" class="required" err_msg="Name cannot be empty" />
          </div><br />
          <div class="subtext" id="divformname"><strong>Email: </strong></div>
          <div id="divformcontent">
            <input name="Email" type="text" size="40" class="required validate-email" err_msg="Email is not valid" />
          </div><br />
          <div class="subtext" id="divformnameb"><strong>Messages : </strong></div>
          <div id="divformcontent2">
            <textarea name="Messages" cols="35" rows="3" class="required" err_msg="Please enter some worthwhile Questions/Comments"></textarea>
        </div><br />
          <div id="divformname"></div>
          <div id="divformcontent">
            <input type="submit" name="Submit" value="Submit Form" class="button" />
            <input type="reset" name="Reset" value="Reset" class="button" />
          </div>
          
        <p><br>
         </p>
</form></div><p>&nbsp;</p>
</div>
</div>
</div>
<?php include('footer.php') ?>
