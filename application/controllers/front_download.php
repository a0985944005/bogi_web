<?php
class Front_download extends CI_Controller 
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
			
				
					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'docs',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("id"=>"asc")
							);
					$register	= $this->Common->select($post);
					
					// $page_output['journal']='';

					$page_output['docs_data']=$register;	

			break;
				
			default:
			show_404();
				break;
		}
		//-----------------------------載入view畫面------------------------------

		
		
		$this->load->view('front/templates/header', $header_output);
		$this->load->view('front/templates/menu');
		$this->load->view('front/download/'.$page,$page_output);
		$this->load->view('front/templates/footer');
	}


}