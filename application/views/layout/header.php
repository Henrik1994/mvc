  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
   <!--  google map-->
    
    
    

<!-- my links-->
    <script src="js/javascript.js"></script> 
    <link rel="stylesheet" href="/css/style.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/img/logo.jpg" class="logo" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/main/about">About</a></li>
        <li><a href="/project">Project</a></li>
        <li><a href="/contact">Contact</a></li>
  
      </ul>
      <ul class="nav navbar-nav navbar-right">
    <li class='dropdown'>
        <a href="#" class="dropdown-toggle"  data-toggle='dropdown'><span class="glyphicon glyphicon-log-in "  ></span> 
            <?php 
           if(isset($_SESSION["user_name"])) {
            echo $_SESSION["user_name"];

            ?> 
              <a href="/reg/logout" >Logout</a>
            <?php
          }  else  {
            echo 'Login';
          }
            ?>
          </a>
    <ul class='dropdown-menu my_dropdown'>
                <li>
                  <form role='form' class="form" action="/reg/login" method="POST">
                  <div class='form-group'>
                    <input type='text' placeholder='Email:' class='required form-control' name='login' value="">
                  </div>
                  <div class='form-group'>
                    <input type='password' placeholder='Password' class='required form-control' name='password' value="">
                  </div>
                   <div class="checkbox chackbox_my">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                  <button type='submit' class='btn btn-default' name='submit'>Login</button>
                  </form>
                </li>
              </ul>
            
        <li><a href="/reg"><span class="glyphicon glyphicon-user"></span> Registation</a></li>
    </li>
      </ul>
    </div>
  </div>
</nav>