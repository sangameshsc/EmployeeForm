<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style5.css">

<form action ="<?php echo URLROOT.'pages/save' ?>" method="post" enctype="multipart/form-data">
<h1 id="e">Employee Details</h1>

<div class="n">
<div class="n1">
  
<!-- <p> Id </p>
<input type="text"  name="id"> -->

<p>First Name</p>
<input type="text"  name="firstname" required>
<p>Last Name</p>
<input type="text"  name="lastname" required>
<p>Email</p>
<input type="email" name="email" required>
<p>Phone Number</p>
<input type="tel" maxlength="10" minlength="10" name="phoneno" required>
<p>Street </p>
<input type="text" name="street"  required>

<p>City</p>
<input type="text" name="city" required>

</div>
<div class="n2">
<p>State</p>
<input type="text" name="state" required>

<p>Country<p>
  <input type ="text" name="country" required>
<br>
<br>
<p>Pincode</p>
<input type="tel" minlength="6" maxlength="6" name="pincode" required>
<br>
<br>
<p>Photos</p>

<input type="file" accept="image/jpg, image/jpeg, image/png" name="photo" required>


<br><br>

<button >Submit</button>

</div>
</div>
</form>


