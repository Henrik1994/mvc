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
        <li class="active"><a href="index.php">album</a></li>
        <li><a href="shops.php">shops</a></li>
        <li><a href="project.php">project</a></li>
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
<div class="col-sm-12">
  <div class="row">
    <div class="col-xs-4">
  <label for="ex2">col-xs-3</label>
  <input class="form-control" id="ex2" type="text">
    <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>




  </div>
</div>
</div>


    </div>
  </div>
</div>
 

 
       



</body>
</html>

