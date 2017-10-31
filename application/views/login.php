<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>NM Stationary</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <style>
          
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Roboto:100);
.flat-form {
 background: rgba(231, 76, 60, 0.25);
    color: white;
    margin: 25px auto;
    width: 390px;
    /* height: auto; */
    position: relative;
    font-family: 'Roboto';
    padding-bottom: 20px;
}
.flat-form .tabs {
  display: block;
  background: rgba(192, 57, 43, 0.04);
  width: 100%;
  height: 40px;
  margin: 0;
  margin-bottom: 20px;
  padding: 0;
  position: relative;
  list-style-type: none;
}
.flat-form .tabs li {
  display: block;
  margin: 0;
  padding: 0;
  float: left;
}
.flat-form .tabs li a {
  display: block;
  background: rgba(192, 57, 43, 0.4);;
  color: white;
  text-decoration: none;
  font-size: 16px;
  float: left;
  padding: 12px 22px;
}
.flat-form .tabs li a.active {
  background: rgba(231, 76, 60, 0);
  border-right: none;
  -moz-transition: all 0.5s linear;
  -o-transition: all 0.5s linear;
  -webkit-transition: all 0.5s linear;
  transition: all 0.5s linear;
}
.flat-form .tabs li a:hover {
  background: #d65548;
  -moz-transition: all 0.5s linear;
  -o-transition: all 0.5s linear;
  -webkit-transition: all 0.5s linear;
  transition: all 0.5s linear;
}
.flat-form .tabs li:last-child a {
  text-align: center;
  width: 174px;
  padding-left: 0;
  padding-right: 0;
  border-right: none;
}
.flat-form .form-action {
  padding: 0 20px;
  position: relative;
}
.flat-form h1 {
  font-size: 42px;
  padding-bottom: 10px;
}
.flat-form p {
  font-size: 12px;
  padding-bottom: 10px;
  line-height: 25px;
}
.flat-form a {
  color: yellow;
  text-decoration: none;
}
.flat-form a:hover {
  text-decoration: underline;
}
.flat-form form {
  padding-right: 20px !important;
}
.flat-form form input[type=text], .flat-form form input[type=password], .flat-form form input[type=submit] {
  font-family: 'Roboto';
}
.flat-form form input[type=text], .flat-form form input[type=password], .flat-form form input[type=email] {
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  padding-left: 15px;
  background: #fff;
  border: none;
  color: #050303;
  outline: none;
  font-weight: bold;
}
.flat-form form input.button {
  border: none;
  display: block;
  background: #136899;
  height: 40px;
  /*width: 80px;*/
  color: #ffffff;
  text-align: center;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-box-shadow: 0px 3px 1px #2075aa;
  -webkit-box-shadow: 0px 3px 1px #2075aa;
  box-shadow: 0px 3px 1px #2075aa;
  -moz-transition: all 0.15s linear;
  -o-transition: all 0.15s linear;
  -webkit-transition: all 0.15s linear;
  transition: all 0.15s linear;
}
.flat-form form input.button:hover {
  background: #1e75aa;
  -moz-box-shadow: 0 3px 1px #237bb2;
  -webkit-box-shadow: 0 3px 1px #237bb2;
  box-shadow: 0 3px 1px #237bb2;
}
.flat-form form input.button:active {
  background: #136899;
  @inclue box-shadow( 0 3px 1px #0f608c );
}
.flat-form form input::-webkit-input-placeholder {
  color: #e74c3c;
}
.flat-form form input:-moz-placeholder {
  color: #e74c3c;
}
.flat-form form input::-moz-placeholder {
  color: #e74c3c;
}
.flat-form form input:-ms-input-placeholder {
  color: #e74c3c;
}
.flat-form .show {
  display: block;
}
.flat-form .hide {
  display: none;
}

body {
  background: #1a1a1a;
}
.login-bg{
    background-image: url(http://localhost/mydemo/assets/login_img/stationary.png);
    background-size: cover;
    height: 100vh;
    background-position: bottom;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script language="Javascript" type="text/javascript">
 
        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode > 31 && charCode < 33))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>
    
    <script language="Javascript" type="text/javascript">
 
        function onlyNumbers(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if (charCode > 47 && charCode < 58)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>
    
</head>

<body class="login-bg">
    <div class="">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
           <div class="flat-form">
            <ul class="tabs">
            <li>
              <a href="#login" class="active">Login</a>
            </li>
            <li>
              <a href="#register">Register</a>
            </li>
            <li>
              <a href="#reset">Reset Password</a>
            </li>
            </ul>
            <div id="login" class="form-action show">
            <h2>Login</h2>
            
            <?php
            echo form_open('Login/authenticate');
            ?>
              <ul>
                <li>
                    <input type="email" placeholder="Your Email" name="email"/>
                </li>
                <li>
                    <input type="password" placeholder="Password" name="password"/>
                </li>
                <li>
                  <input type="submit" value="Let me in !" class="button" />
                </li>
              </ul>
            <?php echo form_close();?>
            </div>
            <!--/#login.form-action-->
            <div id="register" class="form-action hide">
            <h1>Register</h1>
            
            <?php
            echo form_open('Login/signup');
            ?>
              <ul>
                <li>
                    <input type="text" placeholder="Your Name" name="name" onkeypress="return onlyAlphabets(event,this);" required/>
                </li>
                <li>
                  <input type="email" placeholder="Your Email" name="email" required/>
                </li>
                <li>
                    <input type="text" placeholder="Your Contact" name="contact" required onkeypress="return onlyNumbers(event,this);" maxlength="10"/>
                </li>
                <li>
                    <input type="text" placeholder="Your Company Name" name="company_name" required onkeypress="return onlyAlphabets(event,this);"/>
                </li>
                <li>
                  <input type="text" placeholder="Your Department Name" name="department_name" required onkeypress="return onlyAlphabets(event,this);"/>
                </li>
                <li>
                    <input type="password" placeholder="Your Password" name="password" required/>
                </li>
                <li>
                  <input type="submit" value="Lets's Sign Up !" class="button" />
                </li>
              </ul>
            <?php echo form_close();?>
            </div>
            <!--/#register.form-action-->
            <div id="reset" class="form-action hide">
            <h1>Reset Password</h1>
            
            <form>
              <ul>
                <li>
                  <input type="text" placeholder="Email" />
                </li>
                <li>
                  <input type="text" placeholder="Birthday" />
                </li>
                <li>
                  <input type="submit" value="Get My Password !" class="button" />
                </li>
              </ul>
            </form>
            </div>
            <!--/#register.form-action-->
            </div></div>
    </div>
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="<?php echo base_url();?>assets/login_js/index.js"></script>
  <?php
  if(isset($_SESSION['error'])){
  ?>
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notice !</h4>
      </div>
      <div class="modal-body">
          <?php
          if($_SESSION['error'] =='signup_blank'){
          ?>
        <h3>All fields are required in registration form !</h3>
          <?php unset($_SESSION['error']);}?>
          <?php
          if($_SESSION['error'] =='signup_success'){
          ?>
        <h3>You have been successfully registered ! Please Check your mailbox and confirm that you are valid user.</h3>
          <?php unset($_SESSION['error']);}?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
      $(window).load(function(){        
   $('#myModal').modal('show');
    }); 
  </script>
  <?php }?>
</body>
</html>
