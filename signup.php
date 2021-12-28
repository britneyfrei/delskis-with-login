<?php
  include_once 'header.php';
?>
<div class="signup-form">
  <h2>Become a Member</h2>
  <form class="form-horizontal" action="includes/signup.inc.php" method="post">
    <div class="form-group row">
      <label class="control-label col-sm-3" for="name">Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="name" placeholder="Enter Full Name"/>
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" name="email" placeholder="Enter Email"/>
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-3" for="uid">Username:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="uid" placeholder="Enter Username"/>
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-3" for="pwd">Password:</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="pwd" placeholder="Enter Password"/>
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-3" for="pwdrepeat">Password:</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="pwdrepeat" placeholder="Re-enter Password"/>
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
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose proper username.</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose proper email.</p>";
            }
            else if ($_GET["error"] == "pwdsdontmatch") {
                echo "<p>Passwords don't match.</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken.</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up.</p>";
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
