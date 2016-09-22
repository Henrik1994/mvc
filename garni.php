<html lang="en">
<head>
<?php require_once("blogs/head.php"); ?>
<style >

.img_border{
border:1px solid #555;
margin: 10px;
padding: 10px;
}
h3{
    height: 90px;
}
.m_t{
    margin-top: 40%;
}
.kkk{
	margin-left: 10px;
}
.nn{
	width: 100%;
}



</style>
</head>

<body>

<?php require_once("blogs/header.php"); ?>


<!--left col -->

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Admin page</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="dashboard.php">album</a></li>
        <li><a href="garni.php">events</a></li>
        <li><a href="project.php">news</a></li>
        <li><a href="#">Photos</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>





    <!-- wrapper-->
<div class="col-sm-9 row">
<br>
<div class="col-sm-12  ">
<button class="btn btn-success btn-lg pull-right kkk"><i class="glyphicon glyphicon-plus"></i> Add Videos</button>
<button class="btn btn-danger btn-lg pull-right"><i class="glyphicon glyphicon-trash"></i> Delete</button>
</div>
<br>
<div class="row">
 
    <div class="col-sm-3 ">
  <div class="row img_border text-center">
 <iframe width="100%" src="https://www.youtube.com/embed/h8LkRBG_vIo" frameborder="0" allowfullscreen></iframe>
   	 <input type="checkbox" />
  </div>
  </div>
      <div class="col-sm-3 ">
  <div class="row img_border text-center">
  	 <iframe width="100%" src="https://www.youtube.com/embed/h8LkRBG_vIo" frameborder="0" allowfullscreen></iframe>
  	 <input type="checkbox" />
  </div>
  </div>
  </div>


  <br><hr>
<div class="col-sm-12  ">
<button class="btn btn-success btn-lg pull-right kkk"><i class="glyphicon glyphicon-plus"></i> Add Videos</button>
<button class="btn btn-danger btn-lg pull-right"><i class="glyphicon glyphicon-trash"></i> Delete</button>
</div>
<br>
<div class="row">
 
    <div class="col-sm-3 ">
  <div class="row img_border text-center ">
<img src="img/Garni.jpg" alt=""  class="nn">
   	 <input type="checkbox" />
  </div>
  </div>
      <div class="col-sm-3 ">
  <div class="row img_border text-center ">
<img src="img/Garni.jpg" alt="" class="nn">
  	 <input type="checkbox" />
  </div>
  </div>
  </div>
</div>
</div>


    </div>
  </div>
</div>
 

 
       



</body>
</html>

