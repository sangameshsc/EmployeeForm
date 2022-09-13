<?php

?>


<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style8.css">

<div class="login">
<form action ="<?php echo URLROOT."pages/login" ?>" method="post">
  <h1>ADMIN DETAILS</h1>
  <p>Enter email</p>
  <input type="email" name="email">
  <p>Password</p>
  <input type="password" name="password"><br><br>
  <input type="submit" value="login">
</form>
</div>