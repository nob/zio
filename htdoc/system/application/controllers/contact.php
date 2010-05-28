<?php

class Contact extends Controller {

	function Contact()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('contact');
	}

}
