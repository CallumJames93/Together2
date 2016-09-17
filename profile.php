
    <?php
    require_once 'header.php';
    ?>
    <body>
        <div class="container">
            <form action="signup.php" method="post" name="reg">
               <div class = "row">
                   <div class="col-xs-6">
                    <input type="text" name="first" class="form-control" placeholder="Firstname" required><br>
                </div>
               </div>
               <div class = "row">
                   <div class="col-xs-6">
                    <input type="text" name="last" class="form-control"  placeholder="Lasttname" required><br>
                </div>
               </div>
               <div class = "row">
                   <div class="col-xs-6">
                    <input type="text" name="uid" class="form-control"  placeholder="Username" required><br>
                </div>
               </div>
               <div class = "row">
                   <div class="col-xs-6">
                    <input type="password" name="pwd" class="form-control"  placeholder="Password" required><br>
                </div>
               </div>
               <div class = "row">
                   <div class="col-xs-6">
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                </div>
               </div>
                <button type="submit" class="primary">Update</button>
            </form>
        </div>
    </body>
    <?php
    require_once 'footer.php';
     ?>
