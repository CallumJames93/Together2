<?php
require_once 'header.php';

$sql = "SELECT * FROM user_info";
$result = $conn->query($sql)

?>
<!-- Search Functionalty 
<body>
  <div class="input-group">
    <form action="search.php" method="GET">
      <input type="text" name="query" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
    </div>
  </form>-->
<div class="row">
<?php while($rows = $result -> fetch_assoc()) { ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" id="ads">
    <h3><?php echo $rows["compname"]?></h3>
      <?php echo "<img src='images/" . $rows["logoName"] . "'>"?>
      <div class="caption">
        <p><?php echo $rows["bio"]?></p>
        <p>Telephone: <?php echo $rows["telephone"]?></p>
        <p><a href="#" class="btn btn-primary" role="button">Website</a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
    </body>
    <?php
    require_once 'footer.php';
     ?>
