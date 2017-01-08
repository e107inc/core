<?php
// $Id$

if (!defined('e107_INIT')) { exit; }
 
 
// Starter for v2. - Bootstrap 
$LOGIN_TEMPLATE['page']['header'] = "
	<div class='container login'><br />
		<div class='row text-center'>  
			<p>{SITELOGO}</p>
 
";

$LOGIN_TEMPLATE['page']['header'] .= "
	<div class='bottmomenusbox'>
		<div class='title_clean'>".LAN_LOGIN_3." | ".SITENAME."</div>
		<div class='bottmomenus_text'>";

$LOGIN_TEMPLATE['page']['body'] = '

        <h2 class="form-signin-heading">'.LAN_THEME_LOGIN_4.'</h2>
				<div class="col-md-offset-2 col-md-8"> ';
	if (e107::pref('core', 'password_CHAP') == 2)
	{
		$LOGIN_TEMPLATE['page']['body'] .= "
    	<div style='text-align: center' id='nologinmenuchap'>"."Javascript must be enabled in your browser if you wish to log into this site"."
		</div>
    	<span style='display:none' id='loginmenuchap'>";
	}
	else
	{
	  $LOGIN_TEMPLATE['page']['body'] .= "<span>";
	}

$LOGIN_WRAPPER['page']['LOGIN_TABLE_USERNAME'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_PASSWORD'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_SECIMG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_TEXTBOC'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_REMEMBERME'] = "<div class='form-group checkbox'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SUBMIT'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_FOOTER_USERREG'] = "<div class='form-group'>{---}</div>";
// $LOGIN_WRAPPER['page']['LOGIN_TABLE_FPW_LINK'] = "<div class='form-group'>{---}</div>";

$LOGIN_TEMPLATE['page']['body'] .= '
        {LOGIN_TABLE_USERNAME}
        {LOGIN_TABLE_PASSWORD}
        {SOCIAL_LOGIN: size=3x}
				{LOGIN_TABLE_SECIMG_SECIMG} {LOGIN_TABLE_SECIMG_TEXTBOC}
        {LOGIN_TABLE_REMEMBERME}
        {LOGIN_TABLE_SUBMIT}

 ';

$LOGIN_TEMPLATE['page']['footer'] =  "
			<div style='margin-bottom:100px; margin-right:auto;margin-left:auto'>
				<div style='text-align:right'><p>{LOGIN_TABLE_SIGNUP_LINK}</p></div>
				<div style='text-align:right'><p>{LOGIN_TABLE_FPW_LINK}</p></div>
			</div>
			</div>
	</div>";
	

/* workaround login caption */
$LOGIN_TEMPLATE['page']['footer'] .= "
			</div>
		</div>";

?>