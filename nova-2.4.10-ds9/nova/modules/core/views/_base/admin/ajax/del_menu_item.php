<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php echo text_output($header, 'h2');?>

<?php echo text_output($text);?>

<?php echo form_open('site/menus/delete');?>
	<?php echo form_hidden('id', $id);?>
	<?php echo form_hidden('tab', $tab);?>