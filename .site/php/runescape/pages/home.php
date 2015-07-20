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
$randomImage = array_rand($headerImages);
?>

<div class="home-header"
	 style="background-image: url(<?php echo $headerImages[$randomImage]; ?>)">

	<div class="title">
		<h1>FM - RuneScape</h1>
		<h2>A bunch of random tools for RS</h2>
	</div>

	<div class="header-buttons">
		<a class="button" href="#home-content">Explore</a>
		<a class="button" href="#home-login">Login</a>
	</div>

</div>

<div class="home-content" id="home-content">
	<div class="feature-list-push"></div>
	<div class="feature-list">
		<div class="feature-group">Farming</div>
		<a class="feature" href="#home-login">
			<div class="title">Yield Tracker</div>
			<div class="description">
				Primarily stores yields for your farming runs. Provides key analytics and
				insightful statistics with neat infographics. Includes fully customizable dynamic
				image maker for forum signatures or anything, really.
			</div>
		</a>
	</div>
	<div class="thats-it">
		That's it so far! Don't see something you really really wanted? Let me know by emailing
		me at
		<script>
			document.write('rs-requests');</script><noscript>
			rs-requests</noscript><span class="at"></span><script>
			document.write('kodleeshare')</script><noscript>
			kodleeshare</noscript><span class="dot"></span><script>
			document.write('net')
		</script><noscript>
			net</noscript>
	</div>
</div>

<div class="home-login"
	 id="home-login"
	 style="background-image: url(<?php echo $headerImages[$randomImage]; ?>)">
	<div class="login-wrapper">
		<div class="aligner"></div>
		<div class="left-half">
			<div class="login-text">
				You are logging into the Fru1tMe website. Not RuneScape. Please don't try using
				your RuneScape login here. It wont work. Seriously.
			</div>
		</div>
		<div class="divider"><div></div></div>
		<div class="right-half">
			<form action="/" method="post">
				<div class="form-box">
					<div class="form-text">Username</div>
					<div class="form-input">
						<input type="text" name="fm-usrn" tabindex="1" />
					</div>
				</div>
				<div class="form-box">
					<div class="form-text">Password</div>
					<div class="form-input">
						<input type="password" name="fm-pswd" tabindex="2" />
					</div>
				</div>
				<input type="checkbox" id="create-account" class="hidden" />
				<div class="form-box">
					<div class="form-text">Verify Password</div>
					<div class="form-input">
						<input type="password" name="fm-rp-pswd" tabindex="4"/>
					</div>
				</div>
				<div class="form-box form-controls">
					<div class="form-input">
						<button type="submit" class="login-button" tabindex="3"></button>
					</div>
					<div class="form-input">
						<label for="create-account" class="create-account-button button">
							Create Account
						</label>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
