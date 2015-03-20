<!DOCTYPE html>
<html lang="en-GB" class="uk-notouch">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Serviced Apartments UK &amp; Worldwide - Citybase Apartments</title>
		<meta http-equiv="Content-Script-Type" content="text/javascript">
		<meta name="description" content="Serviced Apartments in London, other major UK cities and worldwide for short or long stays - find your perfect accommodation here, book now">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<style type="text/css">
			.banner-container {
				background-image: url(<?php echo Yii::app()->theme->baseUrl;?>/images/header6.jpg);
			}
			@media (max-width: 487px) {
				.banner-container {
					background-image: url(<?php echo Yii::app()->theme->baseUrl;?>/images/header6-mobile.jpg);
				}
			}
		</style>
	</head>
	<body>
<header id="top" class="new">
	<div class="uk-grid blue-bg">
		<div class="uk-width-1-1 white-border">
			<a href="<?php echo $this->createUrl('/site/index');?>" title="Return home" rel="home" class="uk-float-left site-logo">
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/logo-white.png" alt="Citybase logo">
			</a>
			<div class="uk-hidden-large uk-float-left nav-toggler">
				<a href="<?php echo Yii::app()->request->baseUrl;?>#" class="uk-navbar-toggle" data-uk-offcanvas="{target:&#39;#tablet-menu&#39;}"></a>
			</div>
			<div class="uk-float-right header-buttons">
				<div class="dropdown"><span class="old"><select class="currency-dropdown">
					<option value="AUD">AUD</option>
					<option value="CAD">CAD</option>
					<option value="EUR">EUR</option>
					<option value="GBP">GBP</option>
					<option value="NZD">NZD</option>
					<option value="USD">USD</option>
					<option value="JPY">JPY</option>
					<option value="CHF">CHF</option>
					<option value="ZAR">ZAR</option>
					<option value="SGD">SGD</option>
					<option value="AED">AED</option>
					<option value="INR">INR</option>
				</select></span><span class="selected">USD</span><span class="carat"></span><div><ul><li>AUD</li><li>CAD</li><li>EUR</li><li>GBP</li><li>NZD</li><li class="active">USD</li><li>JPY</li><li>CHF</li><li>ZAR</li><li>SGD</li><li>AED</li><li>INR</li></ul></div></div>
				<?php if(!Yii::app()->user->isGuest):?>
				<a href="/myaccount/signout" title="Sign out of your account" class="uk-button uk-button-primary logout">
					<i class="fa fa-sign-out"></i> Log Out
				</a>
			<?php else:?>
				<a href="https://www.citybaseapartments.com/myaccount" title="Sign in to your account" class="uk-button uk-button-primary login-drop">
					<i class="fa fa-user"></i>用户登录
				</a>
				<p class="create-link uk-text-right">
					<a href="https://www.citybaseapartments.com/myaccount#create-form" title="Create an account" class="signup-drop">注册</a>
				</p>
				<?php endif;?>
			</div>
			<div class="affiliate-remove uk-float-right">
				<p class="uk-text-right">
					<span class="uk-h1"><span class="ppc-phone"><?php echo date('Y年m月d日');?></span></span>
				</p>
				<p class="uk-text-right office-opening">
					<?php $weekarray=array("日","一","二","三","四","五","六");echo "星期".$weekarray[date("w")];?>
					<?php echo date('H时i分s秒');?>
				</p>
			</div>
		</div>
		<div class="uk-width-1-1">
			<ul class="uk-list-inline uk-float-left site-nav uk-hidden-medium">
				<li>
					<a href="<?php echo $this->createUrl('/site/index');?>">首页</a>
				</li>
				<li>
					<a class="noicon" href="http://www.citybasebusiness.com/" rel="external">新闻资讯</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/blog/">技术训练</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">跑步装备</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">专业评测</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">赛事报名</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">酷跑天团</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">户外驴友</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">跑友论坛</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">跑友商城</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">热门活动</a>
				</li>
				<li>
					<a href="https://www.citybaseapartments.com/help">美图欣赏</a>
				</li>
			</ul>
			<form method="post" action="" id="quicksearch-form" class="uk-form uk-search uk-hidden-medium uk-float-right">
				<input type="text" name="quicksearch" class="uk-width-1-1 uk-float-right" placeholder="quicksearch" id="quicksearch" autocomplete="off">
				<img src="<?php echo Yii::app()->theme->baseUrl;?>/js/loader.gif" class="quicksearch-loader" alt="A loading icon for the quicksearch">
			<div id="quicksearch-dropdown" class="uk-dropdown uk-dropdown-search uk-dropdown-flip"><ul class="uk-nav uk-nav-search"></ul></div></form>
		</div>
	</div>
</header>
<?php echo $content;?>
<footer>
	<div class="uk-container uk-container-center uk-container-margin">
		<div class="uk-grid">
			<div class="uk-width-medium-1-2 uk-width-1-1">
				<p class="affiliate-remove">Call our UK customer service team on <span class="site-phone"><span class="ppc-phone international">+44 (0) 845 226 9831</span></span></p>
				<div class="uk-grid">
					<div class="uk-width-1-1">
						<ul class="uk-list uk-list-inline">
							<li>
								<a href="https://www.citybaseapartments.com/about" title="About Citybase">About Citybase</a>
							</li>
							<li>
								<a href="https://www.citybaseapartments.com/add-your-property" title="Add your property">Add your property</a>
							</li>
							<li>
								<a href="https://www.citybaseapartments.com/affiliates" title="Become an affiliate">Become an affiliate</a>
							</li>
							<li>
								<a href="https://www.citybaseapartments.com/terms" title="Terms and conditions">Terms &amp; Conditions</a>
							</li>
							<li>
								<a href="http://www.orbitalpartnership.com/" rel="external" class="noicon">Orbital Partnership</a>
							</li>
							
							<li>
								<a href="https://www.citybaseapartments.com/contact" title="Contact Citybase">Contact Us</a>
							</li>
							<li>
								<a href="https://www.citybaseapartments.com/policies/privacy" title="Privacy and Cookie Policy">Privacy &amp; Cookie Policy</a>
							</li>
							<li>
								<a href="https://www.citybaseapartments.com/help" title="Customer Support">Help</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-2 uk-width-1-1">
				<div class="uk-text-right">
					<a href="https://www.citybaseapartments.com/associations" title="Read more about these associations">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/footer-associations.jpg" alt="Citybase associations image">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-1-1">
				<p class="uk-text-center hreview-aggregate">
					© 2007-2015, citybaseapartments.com serviced apartments, all rights reserved<br>
					<span class="item">
						<span class="fn">Citybase Apartments</span>
					</span>
					<span class="rating">
						rated <span class="average">9.2</span>/<span class="best">10</span>
					</span>							-
					<span class="votes">799</span> votes (data taken from Trustpilot as of 19 March 2015 06:47:26 GMT)
				</p>
			</div>
		</div>
	</div>
</footer>
<?php if(Yii::app()->user->isGuest):?>
<div class="myaccount-login-box">
	<div class="myaccount-login-box-inner aqua-bg">
		<ul class="uk-tab uk-tab-grey" data-uk-switcher="{ connect : &#39;#tab-container &#39;}">
	<li class="uk-active">
		<a href="<?php echo $this->createUrl('/site/index');?>#signin-form" data-toggle="tab">用户登录</a>
	</li>
	<li id="create-tab">
		<a href="<?php echo $this->createUrl('/site/index');?>#create-form" data-toggle="tab">用户注册</a>
	</li>
	<li>
		<a href="<?php echo $this->createUrl('/site/index');?>#forgot-password" id="forgot-tab" data-toggle="tab">找回密码</a>
	</li>
	<li>
		<a href="<?php echo $this->createUrl('/site/index');?>#extranet" target="_blank" id="extranet-tab">在线客服</a>
	</li>
</ul>

<div id="tab-container" class="uk-switcher uk-tab-container">
<?php $this->widget('Login');?>
<?php $this->widget('Register');?>	

	

	<div id="forgot-password">

		<form method="post" action="https://www.citybaseapartments.com/myaccount/reset-password#forgot-password" class="uk-form uk-form-stacked password-form">

	<div class="uk-form-row">
		<label class="uk-form-label" for="email">Email Address</label>
		<div class="uk-form-controls uk-grid">
			<div class="uk-width-1-1">
				<input type="text" id="email" name="email" class="uk-form-large uk-width-1-1 required email" placeholder="Your email address">
			</div>
		</div>
	</div>

	<div class="uk-form-row">
		<label class="uk-form-label"></label>
		<div class="uk-form-controls">
			<input type="submit" name="form-submit" class="uk-button uk-button-large uk-button-primary crimson-bg" value="Request Password Reset">
		</div>
	</div>

</form>

	</div>

	<div id="extranet">

		Please wait. Loading supplier login.

	</div>

</div>
		<a href="" title="Close sign in" class="login-close blue-bg"><i class="fa fa-times"></i></a>
	</div>
	
</div>
<?php endif;?>

<!-- This is the off-canvas sidebar -->
<div id="tablet-menu" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-list-inline uk-float-left site-nav">
			<li>
				<a href="https://www.citybaseapartments.com/destinations">Destinations</a>
			</li>
			<li>
				<a href="http://www.citybasebusiness.com/" rel="external">Corporate Apartments</a>
			</li>
			<li>
				<a href="https://www.citybaseapartments.com/blog">Blog</a>
			</li>
			<li>
				<a href="https://www.citybaseapartments.com/help">Customer Support</a>
			</li>
					</ul>
	</div>
</div>
<ul class="uk-list main-social">
	<li>
		<a id="fixed-social-tel" href="https://www.citybaseapartments.com/#" title="Call us now" data-uk-tooltip="{ pos : &#39;left&#39; }">
			<i class="fa fa-phone"></i>
		</a>
	</li>
	<li>
		<a href="https://www.citybaseapartments.com/enquiry" title="Send us an email enquiry" data-uk-tooltip="{ pos : &#39;left&#39; }">
			<i class="fa fa-envelope-o"></i>
		</a>
	</li>
	<li class="share-header">Share</li>
	<li>
		<a href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.citybaseapartments.com%2F?l=1%26utm_source%3Dfacebook%26utm_medium%3Dsocial%2Bshare%26utm_campaign%3Dclick&t=Serviced+Apartments+UK+%26+Worldwide+-+Citybase+Apartments+http%3A%2F%2Fwww.citybaseapartments.com%2F" rel="external" class="facebook noicon" title="Share this page on Facebook" data-uk-tooltip="{ pos : &#39;left&#39; }">
			<i class="fa fa-facebook"></i>
		</a>
	</li>
	<li>
		<a href="http://twitter.com/intent/tweet?text=Serviced+Apartments+UK+%26+Worldwide+-+Citybase+Apartments&url=http%3A%2F%2Fwww.citybaseapartments.com%2F?l=1%26utm_source%3Dtwitter%26utm_medium%3Dsocial%2Bshare%26utm_campaign%3Dclick&source=http%3A%2F%2Fwww.citybaseapartments.com&via=citybaseapts" rel="external" class="twitter noicon" title="Share this page on Twitter" data-uk-tooltip="{ pos : &#39;left&#39; }">
			<i class="fa fa-twitter"></i>
		</a>
	</li>
	<li>
		<a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.citybaseapartments.com%2F?l=1%26utm_source%3Dgoogle%2B%26utm_medium%3Dsocial%2Bshare%26utm_campaign%3Dclick" rel="external" class="google noicon" title="Share this page on Google+" data-uk-tooltip="{ pos : &#39;left&#39; }">
			<i class="fa fa-google-plus"></i>
		</a>
	</li>
	<li>
		<a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.citybaseapartments.com%2F&media=&description=Serviced+Apartments+UK+%26+Worldwide+-+Citybase+Apartments" rel="external" class="pinterest noicon" title="Share this page on Pinterest" data-uk-tooltip="{ pos : &#39;left&#39; }">
			<i class="fa fa-pinterest"></i>
		</a>
	</li>
	<li>
		<a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fwww.citybaseapartments.com%2F?l=1%26utm_source%3Dlinked%2Bin%26utm_medium%3Dsocial%2Bshare%26utm_campaign%3Dclick&title=0&summary=Serviced+Apartments+UK+%26+Worldwide+-+Citybase+Apartments+http%3A%2F%2Fwww.citybaseapartments.com%2F&source=Citybase+Apartments" rel="external" class="linkedin noicon" title="Share this page on LinkedIn" data-uk-tooltip="{ pos : &#39;left&#39; }">
			<i class="fa fa-linkedin"></i>
		</a>
	</li>
</ul>

<div id="tel-modal" class="uk-modal">
	<div id="tel-modal-container" class="uk-modal-dialog uk-modal-dialog-slide long">
		<a href="" class="uk-modal-close uk-close"></a>
		<div id="tel-modal-content">
			<i class="fa fa-phone"></i>
			Call us now on <a href="tel:0845 226 9831">0845 226 9831</a>
			and speak to one of our knowledgeable advisors
		</div>
	</div>
</div>
<div id="ajax-modal" class="uk-modal">
	<div id="ajax-modal-container" class="uk-modal-dialog uk-modal-dialog-slide">
		<a href="" class="uk-modal-close uk-close"></a>
		<div id="ajax-modal-content">
		</div>
	</div>
</div>
<div id="ajax-modal-2" class="uk-modal">
	<div id="ajax-modal-2-container" class="uk-modal-dialog uk-modal-dialog-slide">
		<a href="" class="uk-modal-close uk-close"></a>
		<div id="ajax-modal-2-content">
		</div>
	</div>
</div>
<div id="loading-modal" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-slide">
		<p class="uk-text-center">
			<img src="<?php echo Yii::app()->theme->baseUrl;?>/js/logo.png" alt="Citybase Logo">
		</p>
		<h3 class="uk-text-center">We're just checking for rates and availability. This shouldn't take long...</h3>
		<div class="dancing-dots-text white">			
			<p>
				<span>.</span>
				<span>.</span>
				<span>.</span>
				<span>.</span>
				<span>.</span>
			</p>
		</div>
	</div>
</div>
<div id="loader-modal" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-slide">
		<p class="uk-text-center">
			<img src="<?php echo Yii::app()->theme->baseUrl;?>/js/logo.png" alt="Citybase Logo">
		</p>
		<h3 class="uk-text-center">Please wait, we're just loading your page...</h3>
		<div class="dancing-dots-text white">			
			<p>
				<span>.</span>
				<span>.</span>
				<span>.</span>
				<span>.</span>
				<span>.</span>
			</p>
		</div>
	</div>
</div>
<div id="search-modal" class="uk-modal">
	<div id="search-modal-container" class="uk-modal-dialog uk-modal-dialog-slide long">
		<a href="" class="uk-modal-close uk-close"></a>
		<div id="search-modal-content">
			<div id="advanced-search-form" class="search-container advanced-search">

	<form method="get" action="https://www.citybaseapartments.com/search" class="uk-form uk-search main-search" novalidate="novalidate">

		<div class="uk-grid uk-grid-preserve">

			<div class="uk-width-1-1">

				<h2>Advanced Search</h2>

			</div>

		</div>

		<div class="uk-grid uk-grid-preserve">

						<div class="uk-width-medium-2-5 uk-width-1-1">
				<input type="text" name="destination" class="uk-form-large uk-width-1-1 required destination-input" placeholder="Where do you want to go?" id="destination" value="Manchester" autocomplete="off">
			</div>
						<div class="uk-width-medium-1-5 uk-width-1-2">
				<input type="text" name="checkin" id="checkin-advanced" class="uk-form-large uk-width-1-1 required checkin-input hasDatepicker" value="19/03/2015" placeholder="dd/mm/yyyy">
			</div>
			<div class="uk-width-medium-1-5 uk-width-1-2">
				<input type="text" name="checkout" id="checkout-advanced" class="uk-form-large uk-width-1-1 required checkout-input hasDatepicker" value="20/03/2015" placeholder="dd/mm/yyyy">
			</div>
			<div class="uk-width-medium-1-5 uk-width-1-1 search-submit-section">
				<input type="submit" id="main-search-btn" name="form-submit" class="uk-width-1-1 uk-form-large uk-button uk-button-primary crimson-bg" value="Search">
																			</div>

		</div>

		<div class="uk-grid uk-grid-preserve">

			<div class="uk-width-medium-1-4 uk-width-1-2">

				<h3>Facilities</h3>

				<label class="label-checkbox small padded">
					<input type="checkbox" value="24 Hour Reception" name="facilities[]"> 24 Hour Reception
				</label>

				<label class="label-checkbox small padded">
					<input type="checkbox" value="Air Conditioning" name="facilities[]"> Air Conditioning
				</label>

				<label class="label-checkbox small padded">
					<input type="checkbox" value="Car Parking On-site" name="facilities[]"> Car Parking
				</label>

				<label class="label-checkbox small padded">
					<input type="checkbox" value="Internet Access" name="facilities[]"> Internet Access
				</label>

				<label class="label-checkbox small padded">
					<input type="checkbox" value="Lifts" name="facilities[]"> Lifts
				</label>

			</div>

			<div class="uk-width-medium-1-4 uk-width-1-2">

				<h3>Sort</h3>

				<label class="label-radio medium r_on">
					<input type="radio" value="recommended-asc" name="sort" checked="checked"> Most Popular
				</label>

				<label class="label-radio medium">
					<input type="radio" value="price-asc" name="sort"> Lowest Price
				</label>

				<label class="label-radio medium">
					<input type="radio" value="price-desc" name="sort"> Highest Price
				</label>

				<label class="label-radio medium">
					<input type="radio" value="rating-desc" name="sort"> Customer Rating
				</label>

				<label class="label-radio medium">
					<input type="radio" value="name-asc" name="sort"> Apartment Name
				</label>

			</div>

			<div class="uk-width-medium-1-2 uk-width-1-1">

				<h3>Apartments</h3>

				<div class="uk-grid uk-grid-preserve">

					<div class="uk-width-1-2">

						<select name="num_apartments" id="num_apartments" class="uk-form-large uk-width-1-1">
														<option value="1" selected="selected">1 apartment</option>
														<option value="2">2 apartments</option>
														<option value="3">3 apartments</option>
														<option value="4">4 apartments</option>
														<option value="5">5 apartments</option>
														<option value="6">6 apartments</option>
														<option value="7">7 apartments</option>
														<option value="8">8 apartments</option>
														<option value="9">9 apartments</option>
														<option value="10">10 apartments</option>
													</select>

					</div>

					<div class="uk-width-1-2" id="apartment-people">

												<select name="people[]" id="people0" class="uk-form-large uk-width-1-1 people-select people-input">
														<option value="1">1 guest</option>
														<option value="2" selected="selected">2 guests</option>
														<option value="3">3 guests</option>
														<option value="4">4 guests</option>
														<option value="5">5 guests</option>
														<option value="6">6 guests</option>
														<option value="7">7 guests</option>
														<option value="8">8 guests</option>
														<option value="9">9 guests</option>
														<option value="10">10 guests</option>
													</select>
						
					</div>

				</div>

				<h3>Promo Code</h3>

				<div class="uk-grid uk-grid-preserve">

					<div class="uk-width-1-1">

						<input type="text" name="promo" class="uk-form-large uk-width-1-1 promo-val" placeholder="Enter your code" value="">

					</div>

				</div>

			</div>

		</div>

	<div class="search-dropdown uk-dropdown uk-dropdown-search"><ul class="uk-nav uk-nav-search"></ul></div></form>

</div>
		</div>
	</div>
</div>
		<div class="remarketing">
			<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/scrolldepth.js"></script>
		</div>
<div class="uk-tooltip"></div>
<a id="back-to-top" href="https://www.citybaseapartments.com/#top" class="hidden-phone" style="display: none;"><i class="fa fa-chevron-up"></i></a>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-2" style="position: absolute; top: 481px; left: 666.96875px; z-index: 1; display: none; width: 34em;"><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">March</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div>
<table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th>
	<span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody>
	<tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span>
	</td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td>
	<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td>
	<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td>
	<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td>
	<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td>
	<td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled ">
		<span class="ui-state-default">7</span></td></tr>
		<tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td>
			<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td>
			<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td>
			<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td>
			<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td>
			<td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td>
			<td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">16</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td><td class=" ui-datepicker-unselectable ui-state-disabled  ui-datepicker-today"><span class="ui-state-default">19</span></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">20</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">21</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">25</a></td><td class="  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default ui-state-active" href="https://www.citybaseapartments.com/#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">27</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">28</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table>
		</div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">3</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">4</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">10</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">11</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">17</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">18</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">24</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">25</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2015"><a class="ui-state-default" href="https://www.citybaseapartments.com/#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table>
</div><div class="ui-datepicker-row-break"></div></div>
		</body></html>