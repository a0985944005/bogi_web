        <link href="application/views/theme/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>


 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					修改據點資料
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_base/update");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">名稱</label>
                <div class="col-sm-10">
                  <input type="text" name="name" value="<?=$base_data['name']?>" id="name" class="form-control">
                </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">地址</label>
                <div class="col-sm-10">
                  <input type="text" name="address" value="<?=$base_data['address']?>" id="address" class="form-control">
                </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">電話</label>
                <div class="col-sm-10">
                  <input type="text" name="tel" value="<?=$base_data['tel']?>" id="tel" class="form-control">
                </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">傳真</label>
                <div class="col-sm-10">
                  <input type="text" name="fax" value="<?=$base_data['fax']?>" id="fax" class="form-control">
                </div>
              </div>


               





            
                    <div class="buttons">
              <div class="pull-right">
              <input type="hidden" name="id" value="<?=$base_data['id']?>">
                <button class="btn btn-primary" type="submit" id="submit_regform" onclick="return(confirm('確認要更改嗎？'))">送出</button>   
                 <a  href="<? echo site_url("admin_base/index/index");?>" class="btn btn-danger" id="submit_regform">返回</a>       
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>

			</div>
		</div>
	</div>
</div>

