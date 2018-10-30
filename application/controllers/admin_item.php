<?php
class Admin_item extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/index_model','index_model');
		
		//-----------------------判斷是否登入預防直接載入網址-----------------------
		$session 	= $this->Common->session('select',array());
		
		// echo "<pre>";
		// var_dump($session['privilege_id']);
		// exit;
		
		// echo "<pre>";
		// 	var_dump($session);

			//exit;

		if(!isset($session['account']) )
		{
			$this->session->sess_destroy();
			redirect('admin_login/index/index/', 'refresh'); //轉換function

		}
		
	}

	public function index($page = 'index',$slug = FALSE)
	{
	//-----------------------------載入參數-------------------------------
	
		$header_output['session']	= $this->Common->session('select',array());	//載入session參數
		$header_output['meun'] 		="close";
		$header_output['page_meun'] ="service_item";
		$header_output['page_meun_'] = "";
		

		//-----------------------------首頁內容資料-------------------------------
		switch($page)
		{
			case 'index':

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'service_item',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("id"=>"asc")
							);
					$register	= $this->Common->select($post);
					
					// $page_output['journal']='';

					$page_output['item_data']=$register;
			break;


			case 'update':

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'service_item',
							'where' 		=>array('id'=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
							

				$register					= $this->Common->select($post);	

				 if(empty($register))
				 {
				 	show_404();
				 }
				
				$page_output['item_data'] = $register[0];


				break;

			case 'insert':
				$page_output['item_data'] 	= '';
				break;
			default:
				break;
		}
		//-----------------------------載入view畫面------------------------------
		
		
		$this->load->view('admin/templates/header',$header_output);
		$this->load->view('admin/item/'.$page,$page_output);
		$this->load->view('admin/templates/footer');
		
	}	

public function insert($blog_id=FALSE)
	{
		
		
		$title = $this->input->post('title');

			
							//---------------------寫入的資料-----------------------------
					$post		= array (//由view insert表單轉送過來的資料	
										'title'	=> $title);
										
					
					//---------------------載入參數的資料-----------------------------
					$table 	= array('service_item');					//各個資料表
					$data	= array($post);						//各個資料表 - 修改資料
					$this->Common->insert($table, $data);		//送出更新	

					$item_id=$this->db->insert_id();

					
					

		//---------------------檔案上傳-----------------------------
		$Mutil_upload_msg= false;
		if (!empty($_FILES['pic']['name'][0]))
			 {
				$config = array(
					'upload_path'   => 'application/views/front/theme/img/works/',
					'allowed_types' => '*',
					'encrypt_name'  => TRUE,                       
				);
				$Mutil_upload_msg = $this->Common->mutil_file_uploads($_FILES['pic'],$config);
			 }
		
			$pic_name = '';		//存放最後要存入SQL的圖片名稱

		if($Mutil_upload_msg != false && !empty($Mutil_upload_msg))
				{
					foreach($Mutil_upload_msg as $single_data)
					{				
						//---------------------寫入的資料-----------------------------
						$post		= array (//由view insert表單轉送過來的資料
											'item_pic'	=> $single_data['file_name'] );
						
						//---------------------載入參數的資料-----------------------------
						$table 	= array('service_item');	

						//各個資料表
						$where 	= array(array('id'	=> $item_id));

						$data	= array($post);						//各個資料表 - 修改資料
						$this->Common->update($table,$where, $data);		//送出更新	
						
						
					}
				}

			
		//----------------轉換function-------------------
		redirect('admin_item/index/index', 'refresh');




	}





	public function update()
	{

		//---------------------待修改的資料-----------------------------
		$slide_id =  $this->input->post('id');
		$post		= array (//由view update表單轉送過來的資料
							'title' 		=> $this->input->post('title'), 
							// 'content'		=> $this->input->post('content')
							);
	
		//---------------------載入參數的資料-----------------------------
		//各個資料表
		$table 	= array('service_item');
						
		//各個資料表 - 搜尋條件
		$where 	= array(array('id'	=> $this->input->post('id')));
						
		//各個資料表 - 修改資料
		$data	= array($post);
					
		//送出更新	
		$this->Common->update($table, $where, $data);
		


//---------------------檔案上傳-----------------------------
	// 	$Mutil_upload_msg= false;
	// 	if (!empty($_FILES['pic']['name'][0])) {
	// 			$config = array(
	// 				'upload_path'   => 'application/views/img/slideshow/',
	// 				'allowed_types' => '*',
	// 				'encrypt_name'  => TRUE,                       
	// 			);
	// 			$Mutil_upload_msg = $this->Common->mutil_file_uploads($_FILES['pic'],$config);
	// 		}
		
			
	// 		$pic_name = '';		//存放最後要存入SQL的圖片名稱
	// 	if($Mutil_upload_msg != false && !empty($Mutil_upload_msg))
	// 	{
	// 		foreach($Mutil_upload_msg as $single_data)
	// 		{				
	// 			//---------------------寫入的資料-----------------------------
	// 			$post		= array (//由view insert表單轉送過來的資料
	// 								'id'	=> $slide_id, 
	// 								'pic_name'	=> $single_data['file_name']
	// 								 					);
				
	// 			//---------------------載入參數的資料-----------------------------
	// 			$table 	= array('service_item');					//各個資料表
	// 			$data	= array($post);						//各個資料表 - 修改資料
	// 			$this->Common->insert($table, $data);		//送出更新	



	// }
	// 	}



		//----------------轉換function-------------------
		redirect('admin_item/index/index', 'refresh');

}

	public function delete($id)
	{
	


  //------------------刪除部落格項目------------------------------
  		$table 	= array('service_item');								//各個資料表
		$where 	= array(array('id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	
	
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}


	public function download_files($download_id)
	{
		
		
		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'service_item',
							'where' 		=>array('id' => $download_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
			$item_type_data = $this->Common->select($post);	
		
		//echo $blog_type_data[0]['file_name'];
				
		$this->load->helper('download');		
		$data = file_get_contents("application/views/front/theme/img/works/".$item_type_data[0]['item_pic']); // Read the file's contents
		$name = $item_type_data[0]['item_pic'];
		force_download($name,$data);

	}		

	public function delete_files($delete_id)
	{
		
		
		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'service_item',
							'where' 		=>array('id' => $delete_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
			$blog_type_data = $this->Common->select($post);	
		$this->load->helper('file');
		
		$file = "application/views/front/theme/img/works/".$blog_type_data[0]['item_pic'];
		@unlink($file);
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('service_item');								//各個資料表
		$where 	= array(array('id' => $delete_id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	
		
		//----------------轉換function-------------------
		redirect('admin_item/index/index', 'refresh');
	}	


}