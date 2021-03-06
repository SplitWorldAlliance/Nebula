<?php
/*
|---------------------------------------------------------------
| TEMPLATE - LOGIN
|---------------------------------------------------------------
|
| File: application/views/titan/template_login.php
| Skin Version: 1.0
|
| Login layout file used by the titan skin.
|
| $sec options are: main, wiki, admin, login
| $css can be anything you want (with a .css extension of course)
|
*/

$sec = 'login'; /* set the section of the system */
$css = 'main.css'; /* the name of the main css file */

$path_raw = dirname(__FILE__); /* absolute path of the current file */
$path = explode('/', $path_raw); /* explode the string into an array */

if (count($path) <= 1)
{ /* Windows servers use back slashes, so we have to capture for that */
	$path = explode('\\', $path_raw);
}

$pcount = count($path); /* count the number of keys in the array */
$skin_loc = $pcount -1; /* create the first element used */
$current_skin = $path[$skin_loc];

/* set the final style location */
$style_loc = APPFOLDER . '/views/' . $current_skin . '/' . $sec . '/css/' . $css;

/* set up the link tag parameters */
$link = array(
	'href'	=> 	$style_loc,
	'rel'	=> 	'stylesheet',
	'type'	=> 	'text/css',
	'media'		=> 'screen',
	'charset'	=> 'utf-8'
);

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?></title>
		
		<meta name="description" content="<?php echo $this->config->item('meta_desc');?>">
		<meta name="keywords" content="<?php echo $this->config->item('meta_keywords');?>">
		<meta name="author" content="<?php echo $this->config->item('meta_author');?>">
		
		<?php echo $_redirect;?>
		
		<!-- STYLESHEETS -->
		<?php echo link_tag($link); ?>
		
		<!-- JAVASCRIPT FILES -->
		<?php include_once($this->config->item('include_head_login')); ?>
		
		<?php echo $javascript;?>
	</head>
	<body>
		<div id="container">
			<div id="head">
				<div id="menu">
					<div class="nav-main">
						<ul>
							<li><a href="<?php echo site_url('login/index');?>"<?php if ($this->uri->rsegment(2) != 'reset_password') { echo ' class="active"'; }?>><span><?php echo ucwords(lang('actions_login') .' '. lang('time_now'));?></span></a></li>
							<li><a href="<?php echo site_url('login/reset_password');?>"<?php if ($this->uri->rsegment(2) == 'reset_password') { echo ' class="active"'; }?>><span><?php echo ucwords(lang('actions_reset') .' '. lang('labels_password'));?></span></a></li>
							<li><a href="<?php echo site_url('main/index');?>"><span><?php echo ucfirst(lang('actions_back') .' '. lang('labels_to') .' '. lang('labels_site'));?></span></a></li>
						</ul>
					</div>
				</div>
				
				<div class="head_content">
					<h1><?php echo $this->options['sim_name'];?></h1>
				</div>
			</div>
			
			<div class="content">
				<?php echo $flash_message;?>
				<?php echo $content;?>
			</div>
			
			<!-- FOOTER -->
			<div id="footer">
				Powered by <strong><?php echo APP_NAME;?></strong>
			</div>
		</div>
	</body>
</html>