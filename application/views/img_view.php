<div class="container-fluid bg-3 text-center">
   <div class="row">
      <h2 style="text-align:center" >images<h2>
    <?php 
    if(empty($data)){
      ?>
      <p>No Pictures for this album </p>
      <?php
    }
    foreach ($data as $key => $value) {
      ?>
    <div class="col-sm-3">
      <img src="/img/<?=$value['img_src'];?>" class="img-responsive" style="width:100%" alt="Image">
    </div>
 <?php 
   }
?>

    
  </div>
</div>