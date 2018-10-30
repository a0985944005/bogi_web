
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
                    <a href="<?=site_url("admin_docs/index/insert/");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增服務項目</a>
                   
					</div>
                <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped" id="dynamic-table" >
                    <thead>
                    
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>

                            <th style="min-width:100px;"><div align="center">標題</div></th>
                            
                            <th style="min-width:100px;"><div align="center">檔案</div></th>

                           <!--  <th style="min-width:100px;"><div align="center">內容</div></th>
                             -->
                            <th  style="min-width:150px;" class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                       
                    </thead>
                    <tbody>
                  
					           	<? 
                      foreach($docs_data as $docs)
                      { ?>
            
                      <tr>
                          <td><div align="center" style="margin: 60px auto;">
                            <? echo $docs['id']; ?>
                          </div></td>

                          <td><div align="center" style="margin: 60px auto;">
                            <? echo $docs['title']; ?>
                          </div></td>
                          
                          <td><div align="center" >
                          <? if(empty($docs['file_name'])){?>
                                          <h4 style="margin: 60px auto;">無檔案</h4>
                          <?}else{?>
                            <h4 style="margin: 60px auto;"><?=$docs['file_name'];?></h4>


                         <?}?>
                         
                          
                          
                           
                          </div></td>

                         <!--   <td><div align="center" style="margin: 60px auto;">
                          <? echo $item['content']; ?>
                           
                          </div></td> -->
                          
                        <td align="center">
                          
                            <a class="btn btn-danger" style="width:82px; margin: 60px auto;" href="<?=site_url("admin_docs/delete_files/".$docs['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>

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





