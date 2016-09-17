<?php
require_once 'header.php';
$sql = "SELECT * FROM user_info WHERE uid ='$uid' AND pwd ='$pwd'";
$result = mysqli_query($conn, $sql);
?>
<body>
 <div class="container">
    <div class="well">
      <h3>Title</h3>
        <p> Summary <p>
    </div>
</div>
  </body>
    <?php
    require_once 'footer.php';
     ?>
