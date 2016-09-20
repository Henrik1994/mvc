<div class="conteiner">
 <div class="row">
 		<?php 
foreach ($data as $key => $value) {
?>
	<div class="col-sm-2 col-md-2 ">
		<a href="/album/single/<?=$value['album_id']; ?> ">
			<img style="width:100%" src="/img/<?=$value['album_img']; ?>">
			<p><?=$value['album_title']; ?></p>
		</a>


	</div>
		
<?php
	}
 	?>
 </div>

</div>