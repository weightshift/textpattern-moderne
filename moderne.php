<?php

if (!defined('txpinterface')) die('txpinterface is undefined.');

theme::based_on('classic');

class moderne_theme extends classic_theme
{

	function manifest()
	{
		return array(
			'title'		=> 'Moderne',
			'author' 	=> 'Weightshift',
			'author_uri' 	=> 'http://weightshift.com/',
			'version' 	=> '1.0',
			'description' 	=> 'Moderne Admin Theme',
		);
	}
}
?>