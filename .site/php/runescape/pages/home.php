<?php
$headerImages = array(
		"https://s3.amazonaws.com/fm-runescape/home-headers/aCVsTsfs.jpg",
		"https://s3.amazonaws.com/fm-runescape/home-headers/afWEUIt.jpg",
		"https://s3.amazonaws.com/fm-runescape/home-headers/c3LT46X.jpg",
		"https://s3.amazonaws.com/fm-runescape/home-headers/dung.jpg",
		"https://s3.amazonaws.com/fm-runescape/home-headers/fDAdxcc.jpg",
		"https://s3.amazonaws.com/fm-runescape/home-headers/GBZrCdN.jpg",
		"https://s3.amazonaws.com/fm-runescape/home-headers/wwNBVGa.jpg",
		"https://s3.amazonaws.com/fm-runescape/home-headers/ZLib4qc.jpg"
);
?>

<div class="home-header"
	 style="background-image: url(<?php echo $headerImages[array_rand($headerImages)]; ?>)">

	<div class="title">
		<h1>FM - RuneScape</h1>
		<h2>A bunch of random tools for RS</h2>
	</div>

	<a class="button header-button" href="#home-login">Explore</a>
</div>

<div class="home-login" id="home-login">
	<div class="aligner"></div>
	<div class="left-half">
		<div class="login-text">
			You are logging into the Fru1tMe website -- NOT RUNESCAPE. Please do not type in your
			RuneScape credentials. I don't want them. Jagex probably prefers you don't type them
			here. In fact, YOU probably don't want to type them here anyway.
		</div>
	</div>
	<div class="divider"><div></div></div>
	<div class="right-half">
		<form action="/" method="post">
			<div class="form-text">Username</div>
			<div class="form-input"><input type="text" name="fm-usrn" /></div>
			<div class="form-spacer"></div>
			<div class="form-text">Password</div>
			<div class="form-input"><input type="password" name="fm-pswd" /></div>
			<div class="form-spacer"></div>
			<div class="form-spacer"></div>

			<div class="form-input"><button type="submit">Login</button></div>
		</form>
	</div>
</div>
