

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/edit.css">
<h1 id="lll1"> Update details</h1>
<div class="mnb">

<div class="mnb1">
<form action="<?php echo URLROOT.'Pages/editsave'?>" method="post" enctype="multipart/form-data" >
       <!-- <p>Id</p>
       <input type="number" id="id" name="id" value= '<?php echo $data->id ?>'><br><br><br> -->

       <p>First Name</p>
       <input type="text" id="empId" name="firstname" value= '<?php  echo $data->firstname ?>' ><br>
       <p>Last Name</p>
       <input type="text" id="id"  name='lastname' value='<?php echo $data->lastname ?>'><br>
       <p>Email</p>
       <input type="email" id="id" name="email" value= '<?php echo $data->email ?>'><br>
       <p>Phoneno</p>
       <input type="tel" id="id"  minlength="10" maxlength="10" name="phoneno"value= '<?php echo $data->phoneno ?>'><br>
       <p>Street</p>
       <input type="text" id="id" name="street" value= '<?php echo $data->street ?>' ><br>
       </div>
       <div class="mnb2">

       <p>City</p>

       <input type="text" id="id" name="city" value= '<?php  echo $data->city ?>'><br>
          <p>State</p>
       <input type="text" id="id" name="state" value= '<?php echo $data->state ?>' ><br>
       <p>Country</p>
       <input type="text" id="id" name="country" value= '<?php echo $data->country ?>' ><br>
       <p>Pincode</p>
       <input type="tel" maxlength="6" minlength="6" id="id" name="pincode"  value= '<?php echo $data->pincode ?>' ><br>
       <p>photo</p>
       <input type="file" id="id" name="photo" value= <img src="<? echo $data->photo ?>" width="100px" height="100px"><br>
       <input type="text" id="empId" name="id" value= '<?php  echo $data->id ?>' >
       <br><br>
       <button id="id" type="submit">submit</button>
   </form>
</div>
<div>