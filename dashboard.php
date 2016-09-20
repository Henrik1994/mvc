<html lang="en">
<head>
<?php require_once("blogs/head.php"); ?>
<style >




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
        <li><a href="events.php">events</a></li>
        <li><a href="news.php">news</a></li>
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
<div class="col-sm-12 ">
<button class="btn btn-success btn-lg pull-right"><i class="glyphicon glyphicon-plus"></i> Add Album</button>
</div>
<br>
<div class="row">
 
    <div class="col-sm-6 ">
  <div class="row img_border">
    <div class="img_wrapper col-sm-6">
    <a href="garni.php">  <img src="img/Garni.jpg" alt="" class="img-thumbnail"></a>
    </div>
    <div class="col-sm-6">
     <a href="garni.php"> <h3>Garni</h3></a>
      <div class="row m_t">
          <button class="btn btn-success col-sm-6"><i class="glyphicon glyphicon-pencil"></i></button>
          <button class="btn btn-danger col-sm-6"><i class="glyphicon glyphicon-trash"></i></button>
      </div>
    </div>

    </div>
  </div>
      <div class="col-sm-6 ">
  <div class="row img_border">
    <div class="img_wrapper col-sm-6">
     <a href="garni.php" ><img src="img/Garni.jpg" alt="" class="img-thumbnail"></a>
    </div>
    <div class="col-sm-6">
     <a href="garni.php"> <h3>Garni</h3></a>
      <div class="row m_t">
          <button class="btn btn-success col-sm-6"><i class="glyphicon glyphicon-pencil"></i></button>
          <button class="btn btn-danger col-sm-6"><i class="glyphicon glyphicon-trash"></i></button>
      </div>
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


