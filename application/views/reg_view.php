<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 sidenav">
      <h1>Loren ipsum</h1>
      <p class="after_form_reg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
       <p class="after_form_reg">Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><br>
      <p><span class="glyphicon glyphicon-map-marker"> Armenia,erevan</span></p>
      <p><span class="glyphicon glyphicon-phone">  00(374)999999999</span></p>
      <p><span class="glyphicon glyphicon-envelope">  loren ipsum@mail.ru</span></p>
     
    </div>

    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9 ">
     <h2>Form control: input</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <form role="form" action="/reg/store" method="POST">
    <div class="form-group" >
      <div class="col-xs-4 ">
        <label for="ex3">Name*:</label>
        <input class="form-control" id="ex3" type="text" name="name" value="<?php echo @$data["name"]; ?>" required>
    
      
        <label for="ex4">Surname*:</label>
        <input class="form-control" id="ex3" type="text" name="surname" value="<?php echo @$data["surname"]; ?>" required/>

     
       
        <label for="ex5">Email*:</label>
        <input class="form-control" id="ex3" type="email" name="email" value="<?php echo @$data["email"]; ?>" required/>

         <label for="ex4">UserName*:</label>
        <input class="form-control" id="ex3" type="text" name="login" value="<?php echo @$data["login"]; ?>" required/
   
    
        <label for="ex6">Password*:</label>
        <input class="form-control" id="ex3" type="password" name="password" required/>
    
  
        <label for="ex7">R Password*:</label>
        <input class="form-control" id="ex3" type="password" name="rpassword" required/>
        <br>
        <div style="color: red"><?php if(!empty($errors)) { echo array_shift($errors);} ?></div>
     <br>
	  <button type="submit" class="btn btn-default" name="send">Registration</button>
  </div>
  </div>
    </form>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3 class="vernagir">Attention</h3>
      <p class="after_form_reg">Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><br></div>




  
    
     
   

     
    
      
      
      
     <!--  <div class="row">
       <div class="col-sm-2 text-center">
         <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
       </div>
       <div class="col-sm-10">
         <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
         <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         <br>
       </div>
       <div class="col-sm-2 text-center">
         <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
       </div>
       <div class="col-sm-10">
         <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
         <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         <br>
         <p><span class="badge">1</span> Comment:</p><br>
         <div class="row">
           <div class="col-sm-2 text-center">
             <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
           </div>
           <div class="col-xs-10">
             <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
             <p>Me too! WOW!</p>
             <br>
           </div>
         </div>
       </div> -->
      </div>
    </div>
  </div>
</div>