  <style type="text/css">
      .news{
          margin-right:10px;
          margin-left:10px;
          padding:10px; 
          margin-bottom: 50px;
          -moz-box-shadow:4px 4px 12px 3px rgba(50%,50%,50%,0.1);
          -webkit-box-shadow:4px 4px 12px 3px rgba(50%,50%,50%,0.1);
          box-shadow:4px 4px 12px 3px rgba(50%,50%,50%,0.1);
          position: relative;
      }
      .news .btn-warning{
        width: 100px;
        height: 40px; 
        padding-top: 10px; 
        size:20px; 
        position: absolute; 
        right: 5%; 
        bottom: 20px;

      }
      .img-rounded
      {
        width: 80%;
      }
      .news_main{
       

        height: 220px;
      }
      .news_img{
        padding: 20px;
        height: 220px;
      }
      .news_title{
        padding-top: 20px;
        padding-left:20px;
        font-size: 26px;
        font-family: '微軟正黑體';

      }
      .news_content{
        height:60%;
        padding-top: 25px;
        padding-left:30px;
        padding-right:10px;
        font-size: 16px;
        font-family: '微軟正黑體';
      }
      .news_content > p > img{
        display: none;
      }
      .news_time{
        padding-top: 5px;
        padding-left:25px;
        font-size: 10px;
        font-family: '微軟正黑體';
      }
  </style>

   <script>




$(function(){
    var len = 50; // 超過50個字以"..."取代
    $(".news_content").each(function(i){
        if($(this).text().length>len){
            $(this).attr("title",$(this).text());
            var text=$(this).text().substring(0,len-1)+"...";
            $(this).text(text);
        }
    });
});



    </script>
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

    <!--container start-->
    <div class="white-bg">

        <!-- career -->
    <div class="container career-inner">
     <div class="text-center feature-head wow fadeInDown">
             <div align="center" style="font-size: 32px; padding:1%; font-weight: bold;">最新公告</div>
             <p>Latest Announcement</p>
          </div>
        
      <? 
                      foreach($news_data as $news)
                      { ?>
        <div class="row news">
          <div class="col-sm-4 news_img">
            <img class="img-rounded" src="application/views/news_img/<? echo $news['news_img']; ?>" height="180px">
          </div>

        <div class="col-sm-8 news_main">
          <div class="news_title"><? echo $news['title']; ?></div>
          <div class="news_time"><?=$news['date']?></div>
          <div class="news_content"><? echo $news['content']; ?></div>
   
        </div>

        <a href="index.php/front_news/index/detail/<? echo $news['id']; ?>"  class="btn btn-warning">M o r e ...</a>
        
        </div>

        <?}?>
       





















    <!-- career -->
       </div>
    </div>
    <!--container end-->
     <div style="padding-top: 5%;"></div>
