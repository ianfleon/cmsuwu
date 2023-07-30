<?php

class Preview extends App {
	
	public function post($id)
	{
		// echo 'PREVIEW POST';
		include_once(DIR_ROOT.'/dist/themes/'.uwu('THEME').'/post.php');
	}

}