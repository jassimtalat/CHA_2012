<html>
  <body>
    <form action="" method="post">
<?php

require_once('recaptchalib.php');
  $publickey = "6LePF8gSAAAAANrffgGEWcovArwcr7d3qAZicwpI"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?>
    <br/>
    <input type="submit" value="submit" />
    </form>
  </body>
</html>
