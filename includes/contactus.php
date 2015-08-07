<div class="section-right">
    	  <div class="box-contact">
        <h2>Contact Us</h2><div class="clearfloat"></div>
                <div class="content-heading-line"></div>
            <div class="clearfloat"></div>
                <p>If you are interested in leasing opportunities with Metro Real Estate Development or for general inquiries... </p>
                <form id="contactsmallfrm" name="contactsmallfrm" action="contact.php" method="post" onSubmit="javascript: return checkBeforeSubmit();">
                  <input name="uname" type="text" class="formfield" id="uname"/ style=" margin-right: 24px;" value="Your Name" onfocus="if(this.value=='Your Name') this.value='';" onblur="if(this.value=='')this.value='Your Name'">
                  <input name="uemail" type="text" class="formfield" id="uemail" value="Your Email" onfocus="if(this.value=='Your Email') this.value='';" onblur="if(this.value=='')this.value='Your Email'"/ >
                
                <div class="clearfloat"></div>
                <input name="submit" type="submit"  class="button-sm" value="Continue" id="submit"/>
                </form>
                <script language="javascript">
                function checkBeforeSubmit(){
					var frm = document.contactsmallfrm;
					if(frm.uname.value== '' || frm.uname.value=='Your Name'){
						alert('Please enter your name.');
						frm.uname.focus();
						return false;
					}
					if(frm.uemail.value == '' || frm.uemail.value == 'Your Email'){
						alert('Please enter your email.');
						frm.uemail.focus();
						return false;
					}
					return true;
				}
                </script>
            </div>
        </div>