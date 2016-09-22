  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<<<<<<< HEAD
=======
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
  
   <!--  google map-->
    
    
    

<!-- my links-->
<<<<<<< HEAD
    <script src="js/javascript.js"></script> 
=======
    
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
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
<<<<<<< HEAD
  
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
=======
        <?php 
          if(isset($_SESSION["user_permission"]) && $_SESSION["user_permission"] == 2){
            ?>
           <li><a href="/Dashboard">Dashboard</a></li>
           <?php
          }
              ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class='dropdown'>
          <a href="#" class="dropdown-toggle"  data-toggle='dropdown'><span class="glyphicon glyphicon-log-in "  ></span> 
              <?php 
             if(isset($_SESSION["user_name"])) {
              echo $_SESSION["user_name"];
              
              ?> 
                
              <?php
            }  else  {
              echo 'Login';
            }
              ?>
            </a>
              <ul class='dropdown-menu my_dropdown'>
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
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
<<<<<<< HEAD
=======
        </li>

        <?php
          if(isset($_SESSION["user_name"])) {
              ?>
              <li><a href="/reg/logout" >Logout</a></li>         
              <?php
          }
              
        ?>
>>>>>>> 21d5169fc23218d30a75a819af941e9e9cc861b6
            
        <li><a href="/reg"><span class="glyphicon glyphicon-user"></span> Registation</a></li>
    </li>
      </ul>
    </div>
  </div>
</nav>