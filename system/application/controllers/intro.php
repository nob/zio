<?php

class Intro extends Controller {

	function Home()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('intro');
	}

}
