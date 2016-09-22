<div class="container-fluid bg-3 text-center">
  <div class="row">
      <h2 style="text-align:center" >Videos<h2>
    <?php 
    if(empty($data)){
      ?>
      <p>No Videos </p>
      <?php 
    }

    foreach ($data as $key => $value) {
      ?>
    <div class="col-sm-3">
      <iframe src="/album/videos/<?=$value['v_link'];?>" class="img-responsive" style="width:100%" alt="Image" />
        
         </div>
 <?php 
   }
?>

   
  </div>
</div>