<?php

class Article extends Controller {

	function Article()
	{
		parent::Controller();	
	}
	
	function index()
	{
        $data['img'] = $this->uri->segment(3, "hokubei") . ".png";
		$this->load->view('article', $data);
	}

}
