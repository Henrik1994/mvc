<footer class="container-fluid text-center">


<script src="/js/javascript.js"></script> 
  
  <p>Footer Text</p>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
if(span) {
	span.onclick = function() {
	    modal.style.display = "none";
	}	
}


// Get all images and insert the clicked image inside the modal
// Get the content of the image description and insert it inside the modal image caption
var images = document.getElementsByTagName('img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var i;
for (i = 0; i < images.length; i++) {
   images[i].onclick = function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg.alt = this.alt;
       captionText.innerHTML = this.nextElementSibling.innerHTML;
   }
}
</script>

<script type="text/javascript">

	var search = function(url){
		$.get(url, function(res){
			$('#search_wrapper').html(res);

		})

	}



</script>

<script type="text/javascript">

	var videos = function(url){
		$.get(url, function(res){
			$('#videos_wrapper').html(res);

		})

	}



</script>

<script type="text/javascript">

	var img= function(url){
		$.get(url, function(res){
			$('#img_wrapper').html(res);

		})

	}



</script>

</footer>