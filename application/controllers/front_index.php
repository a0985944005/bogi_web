<?php
class Front_index extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('front/index_model');

	}

	public function index($page = 'index'/*,$slug = FALSE*/)
	{
			//$account_data = $this->Common->session('select');

			//$header_output['session']=$account_data;
		$header_output['session']="";
		// 		if(!isset($account_data['account']))
		// {
							
	
				
		// 		  redirect('front_login/index/index', 'refresh');
			
		// }
		
		//-----------------------------首頁內容資料-------------------------------
		
		switch($page)
		{
			case 'index':

				//公司地點.聯絡資料
					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'service_base',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("id"=>"asc")
							);
					$register	= $this->Common->select($post);
					
					// $page_output['journal']='';

					$page_output['base_data']=$register;
					
					//公司服務項目
					$post_ 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'service_item',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("id"=>"asc")
							);
					$register_	= $this->Common->select($post_);
					
					// $page_output['journal']='';

					$page_output['item_data']=$register_;
				
			
				
				
			break;

			
			default:
			show_404();
				break;
		}
		//-----------------------------載入view畫面------------------------------

		
		
		$this->load->view('front/templates/header', $header_output);
		$this->load->view('front/templates/menu');
		$this->load->view('front/index/'.$page,$page_output);
		$this->load->view('front/templates/footer');
	}

	public function sendmail()
	{
			//寄信通知
		$send	 	= "a0931611312@gmail.com";
		// $send	 	= "a0985944005@gmail.com";
		$subject	= "網站發問";
		$messages 	= "發問者:".$this->input->post('name').
					  "<br>電話:".$this->input->post('phone').
					  "<br>E-MAIL:".$this->input->post('email').
					  "<br>內容:<br>".nl2br($this->input->post('content'));

		$this->Common->sendmail($send,$subject,$messages);
		//----------------轉換function-------------------
		
	redirect('front_index/index/index/', 'refresh'); //轉換function
	}
}