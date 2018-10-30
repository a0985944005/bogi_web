
 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					服務據點管理
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                                                 
                   <div class="adv-table">
                    <div class="table-responsive">
                   
                     <!-- <div align="right">
                    <a href="<?=site_url("admin_faq/index/insert/");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增據點</a>
                   
					</div> -->
                <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped" id="dynamic-table" >
                    <thead>
                    
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>
                            
                            <th style="min-width:100px;"><div align="center">公司名稱</div></th>

                            <th style="min-width:100px;"><div align="center">公司地址</div></th>

                            <th style="min-width:100px;"><div align="center">公司電話</div></th>

                            <th style="min-width:100px;"><div align="center">公司傳真</div></th>
                            
                            <th  style="min-width:50;" class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                       
                    </thead>
                    <tbody>
                  
					           	<? 
                      foreach($base_data as $base)
                      { ?>
            
                      <tr>
                          <td><div align="center">
                            <? echo $base['id']; ?>
                          </div></td>

                          <td><div align="center">
                            <? echo $base['name']; ?>
                          </div></td>

                          <td><div align="center">
                            <? echo $base['address']; ?>
                          </div></td>
                          
                          <td><div align="center">
                          <? echo $base['tel']; ?>
                           
                          </div></td>

                           <td><div align="center">
                          <? echo $base['fax']; ?>
                           
                          </div></td>
                          
                        <td align="center">
                            <a class="btn btn-success" style="width:82px;" href="<?=site_url("admin_base/index/update/".$base['id']);?>">修改</a>
                            <!-- <a class="btn btn-danger" style="width:82px;" href="<?=site_url("admin_base/delete/".$faq['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a> -->

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





