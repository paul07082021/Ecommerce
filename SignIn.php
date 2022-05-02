<html>
    <title>Login/Register</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="signin.css">

<header>
            <a href="index.php"><img src ="lo.png"  class="logo"></a>
            <div class="toggle" onclick ="toggleMenu();"></div>
            <ul class="navigation">
            <li class="cart-icon"><a class="icon-cart" href="index.php"><i class="fas fa-shopping-cart" aria-hidden="true"></i></a></li>
            <li class="menu-icon"><a class="icon-menu" href=""><i class="fas fa-bars" aria-hidden="true"></i></a></li>
            </ul>
    </header>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email " value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password " value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Register New Customers</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email " value="" required="true"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" value="" required="true"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" value="" required="true"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number" value="" required="true"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password " value="" required="true"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password " value="" required="true"/>
                        </div>
                        <div class="terms">
                            <label><input type ="checkbox" value ="agree" required="true"> I am atleast 18 years old and have read and agreed to the
                            <a href="#"> Terms and Condition</a> and <a href="#"> Privacy Policy</a>
                            of The Park Pizza.
                        </label>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </html>