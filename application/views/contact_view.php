<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h1>Loren ipsum</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
       <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><br>
      <p><span class="glyphicon glyphicon-map-marker"> Armenia,erevan</span></p>
      <p><span class="glyphicon glyphicon-phone">  00(374)999999999</span></p>
      <p><span class="glyphicon glyphicon-envelope">  loren ipsum@mail.ru</span></p>
     
    </div>

    <div class="col-sm-9">
     <h2>Form control: input</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <form role="form" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
	
      <label for="name" type="hidden" name="action" value="submit">Name:</label>
        <input type="text" class="form-control" name="name"  value="" required>
		<span style="color:red"><?php=$error_name; ?></span> <br/>
		
      <label for="surname">SurName:</label>
        <input type="text" class="form-control" name="surname" value="" required>
		<span style="color:red"><?php=$error_name; ?></span> <br/>
		
      <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" value="" required>
		<span style="color:red"><?php=$error_name;?></span> <br/>
		
      <label for="comment">Message:</label>
        <textarea class="form-control" rows="10" name="message" required></textarea><br>
		<span style="color:red"><?php=$error_name;?></span> <br/>
		
      <input type="submit" class="btn btn-default" name="send" value="Send email">
    </div>
    <h3 class="vernagir">Attention</h3>
      <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><br>
    </form>




  
    
     
   

     
    
      
      
      
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
