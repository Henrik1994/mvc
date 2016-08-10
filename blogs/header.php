<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button><?php 
      require_once("db.php");


      $data = $_POST;
        if(isset($data['submit']))
        {
          $errors = array();
          $user = R::findOne('users','login = ?',array($data['login']));
          if($user){
                //ka senc login 
              if(password_verify($data['password'],$user->password)){
                    //amen inch kargin e mutq
                $_SESSION["logget_user"] = $user;
                echo '<div style="color: green">Barev'.' '. $_SESSION["logget_user"]->login . '</div><hr>';
                }else{
                  $errors[] = "Paroly sxal e";
                }
              }else{
                $errors[] = "loginov grancvac ogtater chi gtnvel";
              }
              if(!empty($errors)){
                 echo '<div style="color: red">'.array_shift($errors).'</div><hr>';
              }
          }
          ?>
<a href="logout.php">log Out</a>




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="project.php">Project</a></li>
        <li><a href="contact.php">Contact</a></li>
  
      </ul>
      <ul class="nav navbar-nav navbar-right">
    <li class='dropdown'>
        <a href="#" class="dropdown-toggle"  data-toggle='dropdown'><span class="glyphicon glyphicon-log-in "  ></span> Login</a>
    <ul class='dropdown-menu my_dropdown'>
                <li>
                  <form role='form' class="form" action="" method="POST">
                  <div class='form-group'>
                    <input type='text' placeholder='Email:' class='required form-control' name='login' value="<?php echo @$data["login"]; ?>">
                  </div>
                  <div class='form-group'>
                    <input type='password' placeholder='Password' class='required form-control' name='password' value="<?php echo @$data["password"]; ?>">
                  </div>
                   <div class="checkbox chackbox_my">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                  <button type='submit' class='btn btn-default' name='submit'>Login</button>
                  </form>
                </li>
              </ul>
            
        <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Registation</a></li>
    </li>
      </ul>
    </div>
  </div>
</nav>

      <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="project.php">Project</a></li>
        <li><a href="contact.php">Contact</a></li>
	
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <li class='dropdown'>
        <a href="#" class="dropdown-toggle"  data-toggle='dropdown'><span class="glyphicon glyphicon-log-in "  ></span> Login</a>
		<ul class='dropdown-menu my_dropdown'>
								<li>
									<form role='form'>
									<div class='form-group'>
										<input type='text' placeholder='Email:' class='required form-control' id='login'>
									</div>
									<div class='form-group'>
										<input type='password' placeholder='Password' class='required form-control' id='pwd'>
									</div>
									 <div class="checkbox chackbox_my">
									  <label><input type="checkbox"> Remember me</label>
									</div>
									<button type='submit' class='btn btn-default' id='submit-login'>Login</button>
									</form>
								</li>
							</ul>
						
        <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Registation</a></li>
		</li>
      </ul>
    </div>
  </div>
</nav>