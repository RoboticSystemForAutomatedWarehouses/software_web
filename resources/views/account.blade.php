<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Account</title>
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="/css/front_end/bootstrap.css">
        <link rel="stylesheet" href="/js/bootstrap.js">
        
        <link rel="stylesheet" type="text/css" href="/css/front_end/static.css">

        <link rel="stylesheet" type="text/css" href="/css/front_end/account.css">

    </head>
    <body>
        
        <div class="container">
        
             @include ('header')
            
          <div class="row">
              <div class="col-md-4"></div>
            <div class="col-md-5">
            <div id = "log_in">
             
            <h3 id="login_header">Login</h3>
            <span class="glyphicon" id="login_header">&#xe033;</span>
             
            <form>
                <label> Username or Email </label>
                <input class="input_text" type="text">
                <br>
                
                <label> Password</label>
                <input class="input_text" type="password">
                <br>
                <button> Login</button>
                <span>or</span>
                <a id="sign_up" href="sign_up.html">Sign up</a>
    
                <!--
                <input id="remember_me" type="checkbox">
                <label id="remember_me"> Remember Me</label>
                
            -->
                <a id="password_forget" href="forgotten_password.html"> Forgotten your password?</a>
                
            </form>
        
        </div>
            
        </div>
              </div>
            <div class="col-md-4"></div>
            @include ('footer')
            </div>  
         

        
    
    </body>
</html>