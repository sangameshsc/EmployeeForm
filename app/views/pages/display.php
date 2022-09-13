<table border=1px;>
<tr>

<th>First Name</th>
<th>Last Name</th>
<th>Email</th>

<th>Phone Number</th>

<th>Street</th> 

<th>City</th>


<th>State</th>


<th>Country</th>

<th>Pincode</th>


<th>Photos
  <!-- <input type="button" value="action"> -->
</th>
<th>Id</th>
</tr>
<?php foreach($data['posts']as $post):?>
<tr>
    <!-- <td>  <?= $post->id ?> </td> -->
    <td>  <?= $post->firstname ?>  </td>
    <td>  <?= $post->lastname?> </td>
    <td>  <?= $post->email ?> </td>
    <td>  <?= $post->phoneno ?> </td>
    <td>  <?= $post->street?> </td> 
    <td>  <?= $post->city?> </td>
    <td>  <?= $post->state?> </td>
    <td>  <?= $post->country?> </td>
    <td>  <?= $post->pincode?> </td>
    
    <td>  
        <img src="<?= '../public/img/'.$post->photo ?>" width="100px" height="100px">
    </td>
</tr>
 <?php endforeach ?>

</table>