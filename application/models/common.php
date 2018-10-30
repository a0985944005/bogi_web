<?php
class Common extends CI_Model
{
	public function sendmail($send,$subject,$message ,$Confidential = FALSE){
		
		/*
			$send => array('mail1','mail2'....)
			$subject :信件主旨
			$message : 信件內容,支援html(不支援href)
		*/
		$this->load->library('email');
		$this->email->from('service@bo-gi.com', '寶積國際貿易');
		$this->email->to($send);
		$this->email->bcc($Confidential);  
		$this->email->subject($subject);
		$this->email->message($message); 
		$this->email->send();
		//echo $this->email->print_debugger();
	}



	public function session($type,$array = FALSE)
	{
		//-------------------------參數表------------------------------
		/*
		【type】
		1. select	//搜尋
		2. insert   //寫入		
		3. update	//更新
		
		【array】
		1. array();									//全部
		2. array('account'=>'','name'=>'' ... 'n');	//欲處理的項目
		*/
		
		$type 		= strtolower($type);
		$session 	= array();
		switch($type)
		{
			case 'select':
				//搜尋時，若搜尋的欄位有設定時，則進入該區域做處理
				if($array!=false && count($array) > 0)
				{

					foreach($array as $index => $value)
					{
						$session[$index] = $this->session->userdata($index);
					}
				}

				//搜尋時，若搜尋的欄位沒設定時，直接取得所有資料
				else
				{
					
					$session = $this->session->all_userdata();
				}
				return $session;
				break;
			case 'insert':
				//新增時$array陣列需要有值
				if(count($array) > 0)
				{
					$this->session->set_userdata($array);
				}

				//如果$array內沒有值時，回傳FALSE
				else
				{
					return FALSE;
				}
				break;
			case 'update':
				//新增時$array陣列需要有值
				if(count($array) > 0)
				{
					$this->session->set_userdata($array);
				}
				//如果$array內沒有值時，回傳FALSE
				else
				{
					return FALSE;
				}
				break;
			default:
				return FALSE;
				break;
		}
	}



		//查詢函數				
	public function select($post)
	{
		//--------------參數表【範例】--------------
		/*
		【post】//資料集合
		'field'			=>array('*'),			//查詢欄位
		'table'			=>'menu',				//查詢資料表
		'where' 		=>array(),				//篩選條件 可用陣列包覆 ex:array('id'=>'3','name'=>'b')
		'limit_star' 	=>'',					//篩選完的資料篇一輛 data=【1,2,3,4,5,6】、limit_start = 3、data=【4,5,6】
		'limit_count'	=>'',					//篩選資料筆數
		'order_by'		=>array('id'=>'desc')	//資料排序 可用陣列包覆 ex:array('id'=>'desc','name'=>'desc')
		若是要讓update頁面查尋資料用
		設定:
		where=>array('id'=>'5','year <='=>'50')
		limit_count=>'1'
		即可
		*/
		$this->db->select($post['field']);			//要取得的欄位
		$this->db->from($post['table']);			//要取得的資料表名稱
		$this->db->where($post['where']);			//要取得的資料表篩選條件
		foreach($post['order_by'] as $field=>$sort)	//排序用 需要先拆解
		{
			$this->db->order_by($field,$sort);		//無法直接篩入array，所以需要個別加入
		}
		if(isset($post['limit_count']) &&  $post['limit_count']> 0 )				//要取得的筆數及偏移量
		{				
			$this->db->limit($post['limit_count'], $post['limit_star']);
		}
		$query 		= $this->db->get();					//取的資料庫資料
		return  $query->result_array();					//查詢結果陣列資料
	}
	//新增 可執行單筆或多筆不同資料表的寫入
	public function insert($table, $data)
	{
		//--------------參數表【範例】--------------
		/*
		【table】//資料表
		'0'			=>'member',			//第一個愈寫入的資料表名稱
		'1'			=>'news',			//第二個愈寫入的資料表名稱
		.
		.
		.
		【data】//資料集
		'0'			=>array('name'=>'test01','date'=>'2015/07/01'...),		//第一個愈寫入的資料集
		'1'			=>array('name'=>'test02','date'=>'2015/07/02'...),		//第二個愈寫入的資料集
		*/
		for($count = 0 ; $count < count($table) ; $count++)
		{
			$this->db->insert($table[$count],$data[$count]); // 插入資料庫指令
		}
	}
	//更新 可執行單筆或多筆不同資料表的更新
	public function update($table, $where, $data)
	{
		//--------------參數表【範例】--------------
		/*
		【table】//資料表
		'0'			=>'member',			//第一個愈寫入的資料表名稱
		'1'			=>'news',			//第二個愈寫入的資料表名稱
		【where】//篩選條件
		'0'			=>array('id'=>'5','year <='=>'50'),		//第一個愈寫入的篩選條件
		'1'			=>array('id'=>'6','year <='=>'52'),		//第二個愈寫入的篩選條件
		【data】//資料集
		'0'			=>array('name'=>'test01','date'=>'2015/07/01'...),		//第一個愈寫入的資料集
		'1'			=>array('name'=>'test02','date'=>'2015/07/02'...),		//第二個愈寫入的資料集
		*/
		for($count = 0 ; $count < count($table) ; $count++)
		{
			$this->db->update($table[$count], $data[$count], $where[$count]);
		}
	}
	public function delete($table, $where)
	{ 
		//--------------參數表【範例】--------------
		/*
		【table】//資料表

		'0'			=>'member',			//第一個愈寫入的資料表名稱
		'1'			=>'news',			//第二個愈寫入的資料表名稱
		【where】//篩選條件
		'0'			=>array('id'=>'5','year <='=>'50'),		//第一個愈寫入的篩選條件
		'1'			=>array('id'=>'6','year <='=>'52'),		//第二個愈寫入的篩選條件
		*/
		for($count = 0 ; $count < count($table) ; $count++)
		{
			$this->db->delete($table[$count], $where[$count]); 
		}
	}


	public function mutil_file_uploads($files, $post)
	{
		//-------------------------參數表------------------------------
		/*
		【files】
		等同 $_FILES['欄位']
		EX: 如下是多檔上傳欄位 <input type="file" multiple name="pic[]"/> 所送出的 $_FILES 資料
			所以files欄位應傳入 $_FILES['pic'] 
		'pic' => 
			array (size=5)
			  'name' => 
				array (size=3)
				  0 => string '10477BANN-1.jpg' (length=15)
				  1 => string '1642179.jpg' (length=11)
				  2 => string 'web_icon.jpg' (length=12)
			  'type' => 
				array (size=3)
				  0 => string 'image/jpeg' (length=10)
				  1 => string 'image/jpeg' (length=10)
				  2 => string 'image/jpeg' (length=10)
			  'tmp_name' => 
				array (size=3)
				  0 => string 'D:\wamp\tmp\php7EAD.tmp' (length=23)
				  1 => string 'D:\wamp\tmp\php7EBE.tmp' (length=23)
				  2 => string 'D:\wamp\tmp\php7EBF.tmp' (length=23)
			  'error' => 
				array (size=3)
				  0 => int 0
				  1 => int 0
				  2 => int 0
			  'size' => 
				array (size=3)
				  0 => int 578795
				  1 => int 106114
				  2 => int 20569
		
		【post】
		'upload_path'		//檔案目錄上傳路徑 (如image => ./image.....)，依入口文件為主要相對路徑			
		'allowed_types'		//允許副檔名，並以【|】隔開  (gif|jpg|png.....)		
		'overwrite'			//若為TRUE則存在相同檔名的檔案會被覆蓋，反之FALSE則會加上數字區隔
		'max_size'			//最大檔案大小限制
		'max_width'			//最大寬度限制
		'max_height'		//最大高度限制
		'max_filename'		//名稱最大長度
		'encrypt_name'		//設定為 TRUE，上傳檔名將會被隨機的加密字串取代，當 overwrite 為 FALSE 時，此選項才起作用
		'remove_spaces'		//參數為 TRUE 的時候，檔名有出現任何空白都會被取代為底線，建議設定為 TRUE
		*/
		$config['upload_path'] 		= (empty($post['upload_path'])) 	? ('None') 	: ($post['upload_path']);
		$config['allowed_types'] 	= (empty($post['allowed_types'])) 	? ('None') 	: ($post['allowed_types']);
		$config['overwrite']		= (empty($post['overwrite'])) 		? (FALSE) 	: ($post['overwrite']);
		$config['max_size'] 		= (empty($post['max_size'])) 		? ('0') 	: ($post['max_size']);
		$config['max_width'] 		= (empty($post['max_width']))		? ('0') 	: ($post['max_width']);
		$config['max_height'] 		= (empty($post['max_height'])) 		? ('0') 	: ($post['max_height']);
		$config['max_filename'] 	= (empty($post['max_filename'])) 	? ('0') 	: ($post['max_filename']);
		$config['encrypt_name'] 	= (empty($post['encrypt_name'])) 	? (FALSE) 	: ($post['encrypt_name']);
		$config['remove_spaces'] 	= (empty($post['remove_spaces'])) 	? (TRUE) 	: ($post['remove_spaces']);
		$this->load->library('upload', $config);
		$images_data = array();
		foreach ($files['name'] as $key => $image) {
			$_FILES['files[]']['name']= $files['name'][$key];
			$_FILES['files[]']['type']= $files['type'][$key];
			$_FILES['files[]']['tmp_name']= $files['tmp_name'][$key];
			$_FILES['files[]']['error']= $files['error'][$key];
			$_FILES['files[]']['size']= $files['size'][$key];
			if(isset($post['file_name']))
			{
				$config['file_name'] = $this->my_escapeshellarg($post['file_name']);
			}
			
			$this->upload->initialize($config);
			if ($this->upload->do_upload('files[]')) {
				$images_data[] = $this->upload->data();
			} else {
				return false;
			}
		}
		return $images_data;
	}
	public function file_uploads($field, $post)
	{
		//-------------------------參數表------------------------------
		/*
		【field】
		string '' //上傳欄位名稱
		
		【post】
		'upload_path'		//檔案目錄上傳路徑 (如image => ./image.....)，依入口文件為主要相對路徑			
		'allowed_types'		//允許副檔名，並以【|】隔開  (gif|jpg|png.....)		
		'overwrite'			//若為TRUE則存在相同檔名的檔案會被覆蓋，反之FALSE則會加上數字區隔
		'max_size'			//最大檔案大小限制
		'max_width'			//最大寬度限制
		'max_height'		//最大高度限制
		'max_filename'		//名稱最大長度
		'encrypt_name'		//設定為 TRUE，上傳檔名將會被隨機的加密字串取代，當 overwrite 為 FALSE 時，此選項才起作用
		'remove_spaces'		//參數為 TRUE 的時候，檔名有出現任何空白都會被取代為底線，建議設定為 TRUE
		*/
		if(isset($post['file_name']))
		{
			$config['file_name'] = $this->my_escapeshellarg($post['file_name']);
		}
		$config['upload_path'] 		= (empty($post['upload_path'])) 	? ('None') 	: ($post['upload_path']);
		$config['allowed_types'] 	= (empty($post['allowed_types'])) 	? ('None') 	: ($post['allowed_types']);
		$config['overwrite']		= (empty($post['overwrite'])) 		? (FALSE) 	: ($post['overwrite']);
		$config['max_size'] 		= (empty($post['max_size'])) 		? ('0') 	: ($post['max_size']);
		$config['max_width'] 		= (empty($post['max_width']))		? ('0') 	: ($post['max_width']);
		$config['max_height'] 		= (empty($post['max_height'])) 		? ('0') 	: ($post['max_height']);
		$config['max_filename'] 	= (empty($post['max_filename'])) 	? ('0') 	: ($post['max_filename']);
		$config['encrypt_name'] 	= (empty($post['encrypt_name'])) 	? (FALSE) 	: ($post['encrypt_name']);
		$config['remove_spaces'] 	= (empty($post['remove_spaces'])) 	? (TRUE) 	: ($post['remove_spaces']);
		
		$this->load->library('Upload',$config);
		$this->upload->do_upload($field);
		return $this->upload->data();
	}
}

