
 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					服務項目管理
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                                                 
                   <div class="adv-table">
                    <div class="table-responsive">
                   
                     <div align="right">
                    <a href="<?=site_url("admin_item/index/insert/");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增服務項目</a>
                   
					</div>
                <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped" id="dynamic-table" >
                    <thead>
                    
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>

                            <th style="min-width:100px;"><div align="center">標題</div></th>
                            
                            <th style="min-width:100px;"><div align="center">圖片</div></th>

                           <!--  <th style="min-width:100px;"><div align="center">內容</div></th>
                             -->
                            <th  style="min-width:150px;" class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                       
                    </thead>
                    <tbody>
                  
					           	<? 
                      foreach($item_data as $item)
                      { ?>
            
                      <tr>
                          <td><div align="center" style="margin: 60px auto;">
                            <? echo $item['id']; ?>
                          </div></td>

                          <td><div align="center" style="margin: 60px auto;">
                            <? echo $item['title']; ?>
                          </div></td>
                          
                          <td><div align="center" >
                          <? if(empty($item['item_pic'])){?>
                                          <h4 style="margin: 60px auto;">無圖片</h4>
                          <?}else{?>
                            <img src = "application/views/front/theme/img/works/<?=$item['item_pic'];?>" width="200px" heigh="80px">


                         <?}?>
                         
                          
                          
                           
                          </div></td>

                      
                          
                        <td align="center">
                            <a class="btn btn-success" style="width:82px; margin: 60px auto;" href="<?=site_url("admin_item/index/update/".$item['id']);?>">修改</a>
                            <a class="btn btn-danger" style="width:82px; argin: 60px auto;" href="<?=site_url("admin_item/delete_files/".$item['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>

                         </td>


                        </tr>
                        <?   } ?>
                    </tbody>
                </table>
               </div>     
                    </div>
                                    
                                               
              </div>
           </div>
		</div>
	</div>
</div>





