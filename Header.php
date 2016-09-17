<?php
session_start();
require_once 'config.php';
?>

<!DOCTYPE html>
<html>
<header>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Media Query to make responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">
</header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Together</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="board.php">AdBoard</a></li>
        <li class="dropdown">
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <?php if ($_SESSION == false): ?>
          <li><a href="register.php">Register</a><li>
          <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
          <?php endif; ?>
          <?php if ($_SESSION == true):?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#">Achievements</a></li>
            <li><a href="#">Friends</a></li>
            <li role="separator" class="divider"></li>
        <form action="logout.php">
            <button style="margin: 10px" type="submit" class="btn btn-primary">Logout</button>
        </form>
          </ul>
        </li>
    <?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- LOGIN MODAL -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog" role="document">
    <form action="login.php" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
         <label>
           <input type="text" name="uid" placeholder="Username"><br>
         </label>
         <label>
             <input type="password" name="pwd" placeholder="Password"><br>
         </label>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div><!-- /.modal-content -->
    </form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
