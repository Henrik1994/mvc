
<main>
	<div class='main container'> <!-- start of - main div -->
		<div class='row'>
			  <div class='col-xl-offset-1 col-xl-10 col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12'>
				<nav>
				  <ol class='breadcrumb'>
  				    <li><a href='#'>Գլխավոր</a></li>
 				    <li class='active'>Աշխատանք</li>
				  </ol>
				</nav>
			  </div>

			  
			  <div class='search-container col-xl-offset-1 col-xl-10 col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12'>
				<nav>
				<form>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12'>
					  <span class='bold select-title'>Ինչ</span>
					  <input type='text' class='form-control' placeholder='Անվանում, բանալի բառ, կամ ընկերություն' id='what-input'>
					</div>
					<div class='col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12'>
					<span class='bold select-title'>Որտեղ</span>
					<select id='area-select' class='form-control'>
						<option value='0' selected='selected'>Ցանկացած</option>
						<option value='1'>Երևան</option>
						<option value='2'> &nbsp; &nbsp;  Աջափնյակ</option>
						<option value='3'> &nbsp; &nbsp;  Արաբկիր</option>
						<option value='4'> &nbsp; &nbsp;  Ավան</option>
						<option value='5'> &nbsp; &nbsp;  Դավիթաշեն</option>
						<option value='6'> &nbsp; &nbsp;  Էրեբունի</option>
						<option value='7'> &nbsp; &nbsp;  Քանաքեռ Զեյթուն</option>
						<option value='8'> &nbsp; &nbsp;  Կենտրոն</option>
						<option value='9'> &nbsp; &nbsp;  Մալաթիա Սեբաստիա</option>
						<option value='10'> &nbsp; &nbsp;  Նոր Նորք</option>
						<option value='11'> &nbsp; &nbsp;  Նորք Մարաշ</option>
						<option value='12'> &nbsp; &nbsp;  Նուբարաշեն</option>
						<option value='13'> &nbsp; &nbsp;  Շենգավիթ</option>
						<option value='14'>Արագածոտն</option>
						<option value='17'> &nbsp; &nbsp;  Աշտարակ</option>
						<option value='19'>Արարատ</option>
						<option value='20'> &nbsp; &nbsp;  Արարատ</option>
						<option value='21'> &nbsp; &nbsp;  Արտաշատ</option>
						<option value='22'> &nbsp; &nbsp;  Մասիս</option>
						<option value='23'>Արմավիր</option>
						<option value='24'> &nbsp; &nbsp;  Արմավիր</option>
						<option value='25'> &nbsp; &nbsp;  Էջմիածին</option>
						<option value='27'>Արցախ</option>
						<option value='28'> &nbsp; &nbsp;  Ստեփանակերտ</option>
						<option value='40'>Կոտայք</option>
						<option value='41'> &nbsp; &nbsp;  Աբովյան</option>
						<option value='66'> &nbsp; &nbsp;  Չարենցավան</option>
						<option value='42'> &nbsp; &nbsp;  Հրազդան</option>
						<option value='43'> &nbsp; &nbsp;  Ծաղկաձոր</option>
						<option value='67'> &nbsp; &nbsp;  Եղվարդ</option>
						<option value='44'>Լոռի</option>
						<option value='48'> &nbsp; &nbsp;  Վանաձոր</option>
						<option value='52'>Սյունիք</option>
						<option value='53'> &nbsp; &nbsp;  Գորիս</option>
						<option value='54'> &nbsp; &nbsp;  Կապան</option>
						<option value='55'> &nbsp; &nbsp;  Մեղրի</option>
						<option value='57'>Տավուշ</option>
						<option value='60'> &nbsp; &nbsp;  Իջևան</option>
						<option value='61'>Վայոց Ձոր</option>
						<option value='62'> &nbsp; &nbsp;  Վայք</option>
						<option value='64'>Հայաստանից դուրս</option>
					</select>
					</div>
					<br>
					<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					<button class='btn center-block btn-search'>Որոնում</button>
					</div>
					<br>
				</form>
				</nav>
			  </div>
		</div>
		<div class='row'>
			<div class='col-xl-offset-1 col-xl-7 col-lg-offset-1 col-lg-7 col-md-offset-1 col-md-7 col-sm-offset-1 col-sm-7 col-xs-12'>
				<?php 
				  	foreach ($data as $key => $value) {
				  		?>
				  		<article>
							<div class='job col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12'>
							  <header>
							  <h2><a href='/jobs/edit/<?=$value['job_id']?>'><?=$value['title']?></a></h2>
							  </header>
							  <a href='#' class='job-category' title='Բաժին'>Category</a>
								<p><?=$value['description']?></p>
							  <span class='job-other-details'><span title='Տարածաշրջան'><span class='fa fa-map-o'></span> Երեվան</span> <span title='Վերջնաժամկետ'><span class='fa fa-hourglass-end'></span> 2016-03-31</span></span>
							</div>
						</article>
			
				  <?php
				  	}
				  ?>

				
				
				<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12'>
				  <nav>
				  <ul class='pagination pagination-lg'>
					<li><a href='#' title='Առաջին էջ'>&laquo;</a></li>
					<li><a href='#' title='Հետ'>&lsaquo;</a></li>
					<li class='active'><span>1</span></li>
					<li><a href='#'>2</a></li>
					<li><a href='#'>3</a></li>
					<li><a href='#'>4</a></li>
					<li><a href='#' title='Առաջ'>&rsaquo;</a></li>
					<li><a href='#' title='Վերջին էջ'>&raquo;</a></li>
				  </ul>
				  </nav>
				</div>
			</div>
			<aside>
			  <div class='sidebar-right col-xl-offset-1 col-xl-2 col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-12'>
				<form method="post" action="/jobs/store">

					<input type="text" name="title" placeholder="Ashxatanqi anvanumy" required class="form-control" >
					&nbsp;
					<textarea name="description" placeholder="Ashxatanqi bnutagiry" required class="form-control"></textarea>
					<br>
					<button type="submit" class="btn  btn-success"> Save </button>


				</form>
			  </div>
			</aside>
		</div>
	</div> <!-- end of - main div -->
	</main>