<?php

class App {
	
    public function view($v)
    {
        include(DIR_ROOT.'/core/views/'.$v.'.php');
    }

}