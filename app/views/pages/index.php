
<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style8.css">

<div class="index">
    <h1>Employee Details</h1>
     <h1> USER </h1>

     <form action="<?php echo URLROOT."pages/iindex" ?>" method="post">
        <input type="submit"   value="Admin"><br><br>
     </form>
     <form action="<?php echo URLROOT."pages/guest" ?>" method="post">
        <input type="submit"  value="Guest">
     </form>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
