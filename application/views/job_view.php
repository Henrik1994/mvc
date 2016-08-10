<main>
	<div class='main container'> <!-- start of - main div -->
		<div class='row'>
		<div class='col-xl-offset-1 col-xl-10 col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-12'>
		  <nav>
			<ol class='breadcrumb'>
  			  <li><a href='#'>Գլխավոր</a></li>
  			  <li><a href='#'>Թեկնածուներ</a></li>
			</ol>
		  </nav>
		</div>
		</div>
		<div class='row'>
			<div class='sidebar-right col-xl-offset-1 col-xl-2 col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2 col-xs-12'>
				<form method="post" action="/jobs/update/<?=$data['job_id']?>">

					<input type="text" name="title" placeholder="Ashxatanqi anvanumy" required class="form-control" value="<?=$data['title']?>">
					&nbsp;
					<textarea name="description" placeholder="Ashxatanqi bnutagiry" required class="form-control" value="<?=$data['description']?>"></textarea>
					<br>
					<button type="submit" class="btn  btn-success"> Save </button>


				</form>
			  </div>

			<div class='col-xl-offset-1 col-xl-7 col-lg-offset-1 col-lg-7 col-md-offset-1 col-md-7 col-sm-offset-1 col-sm-7 col-xs-12'>
				<div class='row'>
				  <div class='candidate candidate-full col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<div class='col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12'>
						<img src='img/avatar.png' alt='avatar' width='165' height='165' class='img-responsive'>
						</div>
						<div class='col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12'>
						<h1>Gago Gagoyan</h1>
						<h2>Santexnik</h2>
						<div class='star-raiting-container'><span class='star-raiting' style='width: 73%;'></span></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						</div>
						<div class='candidate-details col-xl-12 col-lg-12 col-md-8 col-sm-12 col-xs-12'>
						Մենակ գործատուները ում մոտ որ դիմելա պտի տենան էս աղյուսակը
						  <div class='table-responsive'>
						    <table class='table'>
						      <tr>
						    	<th class='bold' scope='row'>Անուն Ազգանուն Հայրանուն</th>
						    	<td>Գագոյան Գագո Գագոյի</td>
						      </tr>
						      <tr>
						    	<th class='bold' scope='row'>Սեռ</th>
						    	<td>Ար.</td>
						      </tr>
						      <tr>
						    	<th class='bold' scope='row'>Ծննդյան ամսաթիվ</th>
						    	<td>2000-10-25</td>
						      </tr>
						      <tr>
						    	<th class='bold' scope='row'>Կրթություն</th>
						    	<td>2009-2013 Երևանի «Մանց» համալսարան</td>
						      </tr>
						      <tr>
								<td class='work-experience' colspan='2'>
									<div class='table-responsive'>
									<table class='table'>
									<caption class='bold'>Աշխատանքային փորձ</caption>
									<thead>
									<th>Կազմակերպություն</th>
									<th>Տարեթվեր</th>
									<th>Պաշտոն</th>
									</thead>
									<tbody>
									<tr>
										<td>Ստե Ընդե</td>
						    			<td>2010-2012</td>
						    			<td>Ախրաննիկ</td>
									</tr>
									</tbody>
									</table>
									</div>
								</td>
						      </tr>
						      <tr>
						    	<th class='bold' scope='row'>ԼԵզուներ</th>
						    	<td>Անգլերեն, հայերեն, ռուսերեն</td>
						      </tr>
						    </table>
						  </div>
						</div>
						
						</div>

				</div>
			</div>
			
		</div>
	</div> <!-- end of - main div -->
	</main>