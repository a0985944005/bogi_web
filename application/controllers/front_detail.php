<?php
class Front_detail extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'index',$slug = FALSE)
	{

			$header_output['']='';

		switch($page)
		{
			case 'index':

				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'service_item',
							'where' 		=>array("id"=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
					$register	= $this->Common->select($post);
				$page_output['item_data']=$register[0];

				// echo '<pre>';
				// var_dump($page_output['item_data'])	;
				// exit;



			break;
				
			default:
			show_404();
				break;
		}
		//-----------------------------載入view畫面------------------------------

		if(empty($page_output['item_data']['content'])){
					redirect('front_index/index', 'refresh');
				}
		
		$this->load->view('front/templates/header', $header_output);
		$this->load->view('front/templates/menu');
		$this->load->view('front/detail/'.$page,$page_output);
		$this->load->view('front/templates/footer');
	}


}