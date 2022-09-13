<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style41.css">
<div class="d1">
<table>
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
<th>Id </th>

<th>Photos</th>
</tr>

<?php foreach($data['posts']as $post):?>
<tr>
    <td>  <?= $post->firstname ?>  </td>
    <td>  <?= $post->lastname?> </td>
    <td>  <?= $post->email ?> </td>
    <td>  <?= $post->phoneno ?> </td>
    <td>  <?= $post->street?> </td> 
    <td>  <?= $post->city?> </td>
    <td>  <?= $post->state?> </td>
    <td>  <?= $post->country?> </td>
    <td>  <?= $post->pincode?> </td>
    <td>  <?= $post->id ?> </td>
    <td>  
        <img src="<?= '../public/img/'.$post->photo ?>" width="100px" height="100px">
    </td>
</tr>
 <?php endforeach ?>

</table>
<br><br>

<button id="btnExport" onclick="exportReportToExcel(this)">EXPORT</button>
<script>
function exportReportToExcel() {
  let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `export.xlsx`, // fileName you could use any name
    sheet: {
      name: 'Sheet 1' // sheetName
    }
  });
 
}
</script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>