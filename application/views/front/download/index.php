  <style type="text/css">
      td
      {
        text-align:center;
        margin-left:auto; 
        margin-right:auto;
        font-size: 20px;
      }
  </style>
  <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>文件下載</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                   
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="white-bg">

        <!-- career -->
    <div class="container career-inner">
     <div class="text-center feature-head wow fadeInDown">
             <div align="center" style="font-size: 32px; padding:1%; font-weight: bold;">文件下載</div>
             <p>DOCUMENT　DOWNLOAD</p>
          </div>
        
        <hr>
        <div class="row" >
                <table style="width: 100%" class="table table-striped" align="center">
                        <tr>
                            <td align="center">#</td>
                            <td align="center">名稱</td>
                            <td align="center">下載</td>
                            
                        </tr>

                          <? 
                      foreach($docs_data as $docs)
                      { ?>
            
                     

                        <tr>
                            <td><? echo $docs['id']; ?></td>
                            <td><? echo $docs['title']; ?></td>
                            <td> <a class="btn btn-info" href="application/views/front/document/<?=$docs['file_name'];?>" download="<?=$docs['file_name'];?>">下载</a></td>
                        </tr>


                         <?}?>


                      
                </table>
           
        
 
        </div>
    <!-- career -->
       </div>
    </div>
    <!--container end-->
     <div style="padding-top: 5%;"></div>
