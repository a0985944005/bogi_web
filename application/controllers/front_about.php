<?php
class Front_about extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'index')
	{

			$header_output['']='';

		switch($page)
		{
			case 'index':
			
				$page_output['']='';		

			break;
				
			default:
			show_404();
				break;
		}
		//-----------------------------載入view畫面------------------------------

		
		
		$this->load->view('front/templates/header', $header_output);
		$this->load->view('front/templates/menu');
		$this->load->view('front/about/'.$page,$page_output);
		$this->load->view('front/templates/footer');
	}


}