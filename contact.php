<?php 
session_start();
include("includes/header.php");
$character_array = array_merge(range(a, z), range(0, 9));
$string = "";
    for($i = 0; $i < 6; $i++) {
        $string .= $character_array[rand(0, (count($character_array) - 1))];
    }
	$_SESSION["captcha"]=$string;
?>

    <div id="content" class="clearfix">
        <div class="img-right">
		<iframe width="296" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2+Broad+Street,+Bloomfield,+NJ+07003&amp;aq=&amp;sll=40.793929,-74.197819&amp;sspn=0.007237,0.008883&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=2+N+Broad+St,+Bloomfield,+New+Jersey+07003&amp;t=m&amp;ll=40.793929,-74.197798&amp;spn=0.016895,0.02532&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>            <div class="contact-box">
       	    <p class="contact-heading">Metro Real Estate Development Corp.</p>
                <p class="contact-subheading">2 Broad Street, Bloomfield, NJ 07003</p>
                <div class="spacer-big"></div>
                <div class="contact-title">Email</div>
                <div class="contact-text"><a href="mailto:info@metrodevelopment.com">info@metrodevelopment.com</a></div>
                <div class="clearfloat"></div>
            <div class="contact-title">Phone</div>
                <div class="contact-text"><strong>(973) 429-7900</strong></div>
                <div class="clearfloat"></div>
            <div class="contact-title">Fax</div>
                <div class="contact-text"><strong>(973) 860-1386</strong></div>
            	<div class="clearfloat"></div>
          </div>
        </div>
    <div class="text-p">
          <h1>Contact</h1><div class="clearfloat"></div>
          <div class="content-heading-line"></div>
          <div class="clearfloat"></div>
          <p>Thank you for visiting our website. If you have any questions regarding Metro Real Estate Development leasing opportunities or just a general inquiry, please fill out the form below. For immediate assistance please contact our office directly at (973) 429-7900.</p>
          <div class="spacer"></div>
  <?php
		if($_REQUEST["sent"]==1)
		{?>
		  	<h3 style="color:#8f663a">Thank you for showing an interesting in CHA. We will contact you shortly.</h3>
  <?php
		}	
		if($_REQUEST["error"]=="1")
		{
		?>
			<h3 style="color:#8f663a">Captcha mismatch please try again</h3>	
	<?php 
		}
		?>
          <h1>Contact Form</h1><div class="clearfloat"></div>
          <div class="content-heading-line"></div>
          <div class="clearfloat"></div>
  <form action="send_email.php" method="post" name="frm1" id="frm1">
          	<div class="form-field-box">
              <div class="form-field-title">
              <strong>Your name</strong> (required)</div>
              <input type="text" value="<?php if(isset($_POST['uname'])) echo $_POST['uname'];else echo '...';?>"  name="y_name" id="y_name" class="formfield2" onblur="javascript:if(this.value=='')this.value='...'" onfocus="javascript:if(this.value=='...')this.value=''"/>
            </div>
          	<div class="form-field-box" style="margin-right:0;">
              <div class="form-field-title"><strong>Email address</strong> (required)</div>
              <input type="text" value="<?php if(isset($_POST['uemail'])) echo $_POST['uemail'];else echo '...';?>" class="formfield2" name="email_address" id="email_address" onblur="javascript:if(this.value=='')this.value='...'" onfocus="javascript:if(this.value=='...')this.value=''"/>
            </div>
            <div class="clearfloat"></div>
            
          	<div class="form-field-box">
              <div class="form-field-title"><strong>Company</strong></div>
              <input type="text" value="..." class="formfield2" name="company" id="company" onblur="javascript:if(this.value=='')this.value='...'" onfocus="javascript:if(this.value=='...')this.value=''"/>
            </div>
          	<div class="form-field-box" style="margin-right:0;">
              <div class="form-field-title"><strong>Telephone</strong></div>
              <input type="text" value="..." class="formfield2" name="phone" id="phone" onblur="javascript:if(this.value=='')this.value='...'" onfocus="javascript:if(this.value=='...')this.value=''"/>
            </div>
            <div class="clearfloat"></div>
<div class="form-field-box2">
              <div class="form-field-title"><strong>Your Message</strong> (required)</div>
              <textarea rows="5" id="msg" name="msg" class="formarea" onblur="javascript:if(this.value=='')this.value='...'" onfocus="javascript:if(this.value=='...')this.value=''">...</textarea>
            </div>
            <div class="clearfloat"></div>
<div class="form-field-box">
              <div class="form-field-title"><strong>Security code</strong> (required)</div>
			  <div class="img-code"><span>
			  <?php print $string; ?></span>
        </div>
              <input type="text" value="..." name="security_code" id="security_code" class="formfield3" onblur="javascript:if(this.value=='')this.value='...'" onfocus="javascript:if(this.value=='...')this.value=''" />
            </div>  
            <div class="clearfloat"></div>
      <input name="submit" type="submit"  class="button-sm" value="Submit" id="submit"/>
      </form> <!-- end form -->
      </div><!-- end text-p -->
      <div class="clearfloat"></div>
    </div>
    <div class="mainpage-bottom"></div>
    
<?php 
include("includes/footer.php");
?>