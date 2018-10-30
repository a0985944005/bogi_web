<?php
class Front_news extends CI_Controller 
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
							'table'			=>'news',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("id"=>"desc")
							);
					$register	= $this->Common->select($post);
					
					 
					 foreach ($register as $key => $date) {
					 	$date_ = explode(" ", $date['date']);
					 	$register[$key]['date']=$date_[0];
					 	
					 }
					// echo '<pre>';
					// var_dump($register);
					// exit;
					

					$page_output['news_data']=$register;	

			break;

			case 'detail':

						$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'news',
							'where' 		=>array("id"=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
					$register	= $this->Common->select($post);
					

					 $date_ = explode(" ", $register[0]['date']);
					 $register[0]['date'] =  $date_[0];
					
					// echo '<pre>';
					// var_dump($register);
					// exit;
					

					$page_output['news_data']=$register[0];



			break;
				
			default:
			show_404();
				break;
		}
		//-----------------------------載入view畫面------------------------------

		
		
		$this->load->view('front/templates/header', $header_output);
		$this->load->view('front/templates/menu');
		$this->load->view('front/news/'.$page,$page_output);
		$this->load->view('front/templates/footer');
	}


}