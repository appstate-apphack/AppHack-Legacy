<!DOCTYPE html>
<html>
<body>

<div class="reg">
</div>

<h1>Welcome to AppHack registration!</h1>

<form action="insert.php" method="post" class="form-signin" name="form" role="form"  >
                                  <p id="header">Please fill out this small form. Happy Hacking!<p>
                                  <div id="input1">
                                 <p>Email</p> 
			        <input type="email" name="email" class="form-control" placeholder="email" ng-pattern="/^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/" data-errormessage-value-type-mismatch="test123" data-errormessage-missing-value="testing" required >
                                  </div>
                                  <br>
                                  <div id="input2">
				  <p>First Name</p>
                                          <input type="text" name="firstname" class="form-control" placeholder="firstname"> 
                                  </div>
				  <br>
				  <div id="input3">
				  <p>Last Name</p>
					  <input type="text" name="lastname" class="form-control" placeholder="lastname">
                                  <br> 
                                  <div id="input4">
				  <p>Emergency Phone</p>
					  <input type="tel" name="phone" class=form-control placeholder="phone">
				  <br>
				  <div id="submitbutton" >
                                          <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" id="submit">
                                  </div> 
                          </form>


</body>
</html>

