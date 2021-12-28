<?php
  include_once 'header.php';
?>
<div class="signup-form">
  <h2>Log In</h2>
  <form class="form-horizontal" action="includes/login.inc.php" method="post">
    <div class="form-group row">
      <label class="control-label col-sm-3" for="name">Username:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="uid" placeholder="Enter Username or Email"/>
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-3" for="pwd">Password:</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="pwd" placeholder="Enter Password"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col text-center">
        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
    <div class="form-group row">
      <div class="col text-center">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields.</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information.</p>";
            }
        }
        ?>
      </div>
    </div>
  </form>
</div>
<?php
  include_once 'footer.php';
?>