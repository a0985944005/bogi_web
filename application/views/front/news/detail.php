 <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>最新公告</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

<!--property start-->
    <div class=" white-bg">
      <div class="container">
        <div class="row">
        <div align="center" style="font-size: 36px; padding:1%; font-weight: bold;"><?=$news_data['title']?></div>
       
        <hr>
          <div class="col-lg-12 col-sm-12 text-center wow fadeInLeft" style="min-height: 400px;">

            <img src="application/views/news_img/<?=$news_data['news_img']?>" alt="" style="float: left; margin: 15px; width: 30%;min-width: 400px;">
         
          
            
            <div style="font-size: 26px; line-height: 27px;letter-spacing: 3px;">
              <?=$news_data['content']?>
              
            </div><br><br>
           
            
          </div>
          <div class="col-lg-12 col-sm-12" align="center" style="padding-bottom: 50px;padding-top: 30px"> <hr><a href="index.php/front_news/index/"  class="btn btn-primary" style="width: 100px;height: 50px;padding-top:10px; font-size: 20px">返 回</a></div>
          
            <hr>
        </div>

      </div>
    </div>