  <?php
  require_once 'header.php';
  ?>
  <body>
    <div class="container">
      <form action="signup.php" method="post" name="reg" enctype="multipart/form-data">
       <div class = "row">
         <div class="col-xs-6">
          <input type="text" name="first" class="form-control" placeholder="First Name" required><br>
        </div>
      </div>
      <div class = "row">
       <div class="col-xs-6">
        <input type="text" name="last" class="form-control"  placeholder="Last Name" required><br>
      </div>
    </div>
    <div class = "row">
     <div class="col-xs-6">
      <input type="text" name="compName" class="form-control"  placeholder="Company Name" required><br>
    </div>
  </div>
  <div class = "row">
   <div class="col-xs-6">
    <input type="text" name="compAddress" class="form-control"  placeholder="Company Address" required><br>
  </div>
</div>
<div class = "row">
 <div class="col-xs-6">
  <input type="text" name="phone" class="form-control"  placeholder="Telephone" required><br>
</div>
</div>
<div class = "row">
 <div class="col-xs-6">
  <textarea name = "bio" cols="76" rows="5" placeholder="  Company Bio (Not got one? Let us know what you do and we will write one for you!)."></textarea>       
</div>
</div>
<div class = "row">
 <div class="col-xs-6">
  Upload Logo<input type="file" name="logo" ><br>
</div>
</div>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="G5KET7UQX6SLE">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
</form>
<?php if(isset($_POST['first'])) { ?>
<div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
<?php }?>
</div>
</body>
<?php
require_once 'footer.php';
?>
