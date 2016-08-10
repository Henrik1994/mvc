<?php ?>

<meta charset='UTF-8'>
<!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>
<!-- Optional theme -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css' integrity='sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r' crossorigin='anonymous'>
<link rel='stylesheet' href='/css/main.css'>

<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==' crossorigin='anonymous'>
<!-- Latest compiled and minified JavaScript -->
<script src='/jquery.min.js' async></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' crossorigin='anonymous' async></script>
<link href='/select2/select2.min.css' rel='stylesheet'>
<script src='/select2/select2.min.js'></script>
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes'>
<title>MyWork</title>

<header>
	<div class='header-wrapper'>
	<div class='container'>
		<nav class='navbar navbar-default'>
			<div class='container-fluid'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#topMenuLinks'>
					    <span class='icon-bar'></span>
					    <span class='icon-bar'></span>
					    <span class='icon-bar'></span> 
					</button>
				    <a class='navbar-brand' href='/'></a>
				</div>
				<div class='collapse navbar-collapse' id='topMenuLinks'>
					<ul class='nav navbar-nav'>
						<li><a href='/'>Գլխավոր</a></li>
						<li><a href='/jobs'>Աշխատանք</a></li>
						<li><a href='#'>Թեկնածուներ</a></li>
						<li><a href='#'>Ստարտապ</a></li>
						<li><a href='#'>Ներդրող</a></li>
						<li><a href='feedback.php'>Կապ</a></li>
					</ul>
					<ul class='nav navbar-nav navbar-right'>
						<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'> 
							<?php 
							if(@$_SESSION["user_name"]) {
								echo @$_SESSION["user_name"]."</a>"; ?>
							<?php
							} else {
								echo "Մուտք  <b class='caret'></b></a>";
							} ?>
								
						
							<ul class='dropdown-menu'>
								<li>
									<form role='form' action="/reg/login" method="post">
									<div class='form-group'>
										<input type='text' name="user_name" placeholder='Մուտքանուն' class='required form-control' id='login' />
									</div>
									<div class='form-group'>
										<input type='password' name="password" placeholder='Գաղտնաբառ' class='required form-control' id='pwd' />
									</div>
									<button type='submit' class='btn btn-default' id='submit-login'>Մուտք</button>
									</form>
								</li>
							</ul>
						</li>
						<li class='dropdown'>
						<a class='dropdown-toggle flag-link' data-toggle='dropdown' title='Հայերեն' href='#'><span class='hy-flag'></span> <b class='caret'></b></a>
							<ul class='dropdown-menu dropdown-language-menu'>
								<li><a href='#' class='flag-link' title='English'><span class='en-flag'></span></a></li>
								<li><a href='#' class='flag-link' title='Русский'><span class='ru-flag'></span></a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a   href='/reg'>reg<b class='caret'></b></a>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</div>
	</div>
</header>


