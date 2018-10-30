<!DOCTYPE html>
<html dir="ltr" lang="zh-TW">
  <head>
    <meta charset="utf-8">
        <base href="<?=base_url()?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="寶積國際貿易有限公司" /><!--網頁內容描述-->
    <META NAME="keywords" CONTENT="越南物流,佳通,物流,越南,小三通,寶積,大陸貨運,寶積國際貿易,台中小三通,寶積國際貿易有限公司,bo-gi,BAOJI,BAJIO,大陸貨運首選,小三通首選,台中小三通首選,越南物流,越南貨運,越南專線,胡志明專線,越南櫃,s越南櫃子,越南貨,越南貨物"><!--關鍵字-->
    <link rel="shortcut icon" href=""><!--設定網頁圖片-->

    <title>
      寶積國際貿易有限公司
    </title>

    <!-- Bootstrap core CSS -->
    <link href="application/views/front/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="application/views/front/theme/css/theme.css" rel="stylesheet">
    <link href="application/views/front/theme/css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="application/views/front/theme/css/bootstrap.min.css" rel="stylesheet">-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <!--external css-->
    <link href="application/views/front/theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="application/views/front/theme/css/flexslider.css"/>
    <link href="application/views/front/theme/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="application/views/front/theme/css/animate.css">
    <link rel="stylesheet" href="application/views/front/theme/assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="application/views/front/theme/assets/owlcarousel/owl.theme.css">

    <link href="application/views/front/theme/css/superfish.css" rel="stylesheet" media="screen">
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7LVMYfhrFjIwICB8UKPSyBKFjYL5DmBk&callback=initMap"   type="text/javascript"></script>

    <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="application/views/front/theme/css/component.css">
    <link href="application/views/front/theme/css/style.css" rel="stylesheet">
    <link href="application/views/front/theme/css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="application/views/front/theme/css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="application/views/front/theme/js/parallax-slider/modernizr.custom.28468.js">
    </script>

    <script src="application/views/front/theme/jquery-3.2.1.min.js"></script>
    <script src="application/views/front/theme/bootstrap.js"></script>
   

   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="application/views/front/theme/js/html5shiv.js">
    </script>
    <script src="application/views/front/theme/js/respond.min.js">
    </script>
    <![endif]-->
    <style>
    .google-maps {
        position: relative;
        padding-bottom: 100%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 120% !important;
        height: 80% !important;
    }
 
    .skypecss
    {
        opacity:0.8;
        border-radius:10px;
        z-index: 99;
      /*  border-width:5px;
        border-style:double;
        border-color:#CCC;*/
        padding:1%;
        margin: 0 !important;
        position: fixed;
        bottom: 100px;
        left: 10px;
        width: 171px;
        background-color:#EEE;
    }
    .skypetitle td
    {   
        margin: 0;
        font-family: "微軟正黑體" !important;
        font-weight: bold !important;
        color: #5d5d5d !important;
        font-size: 14px !important;
    }
    .skypetitle span
    {

        margin: 0;
        font-family: "微軟正黑體" !important;
        font-weight: bold !important;
        color: #5d5d5d !important;
        font-size: 20px !important;
        font-weight: bold !important;
    }
    #contect_button
    {   
            opacity:0.8;
            /*border-radius:10px;*/
            z-index: 1;
            position: fixed;
            bottom: 100px;
            right: 0px;
            font-family: '微軟正黑體';   
    }   

 </style>




 <button id ="contect_button" type="button" class="btn btn-lg btn-success"  data-toggle="popover" title="聯絡資訊" data-content="">聯<br>絡<br>我<br>們</button>
 <!--data-placement="left" -->
    
<script type="text/javascript">
 $(document).ready(function(){
  // alert( "Handler for .click() called." );
    // $('[data-toggle="popover"]').popover();
     $('[data-toggle="popover"]').popover({
    placement: 'left',
    content: "<table class='skypetitle'><tr><td colspan='3'><span>范先生</span></td></tr><tr><td><img src='application/views/front/theme/img/qq.png' width='20px'>：</td><td>1957950906</td></tr><tr><td><img src='application/views/front/theme/img/sk.png' width='20'>：</td><td><a href='skype:sp668800?call'><img src='application/views/front/theme/img/skype.png' style='width:100px'></a></td></tr><tr><td><img src='application/views/front/theme/img/we.png' width='20px'>：</td><td>sp668800<br></td></tr><tr><td colspan='3'></td></tr><tr><td colspan='3'><span>阮小姐</span></td></tr><tr><td><img src='application/views/front/theme/img/qq.png' width='20px'>：</td><td>2624131747</td></tr><tr><td><img src='application/views/front/theme/img/sk.png' width='20'>：</td><td><a href='skype:daisy.juan2?call'><img src='application/views/front/theme/img/skype.png' style='width:100px'></a></td></tr></table>",
    html: true
  });
  });
</script>


  </head>

  <body>
   
<!-- 
<div class="skypecss">
    <table class='skypetitle'>
        <tr>
            <td colspan='3'><span>范先生</span></td>
        </tr>
        <tr>
            <td><img src='application/views/front/theme/img/qq.png' width='20px'>：</td>
            <td>1957950906</td>
        </tr>
        <tr>
            <td><img src='application/views/front/theme/img/sk.png' width='20'>：</td>
            <td><a href='skype:sp668800?call'><img src='application/views/front/theme/img/skype.png' style='width:100px'></a></td>
        </tr>
        <tr>
            <td><img src='application/views/front/theme/img/we.png' width='20px'>：</td>
            <td>sp668800<br></td>
        </tr>
        <tr>
            <td colspan='3'>　</td>
        </tr>
        <tr>
            <td colspan='3'><span>阮小姐</span></td>
        </tr>
        <tr>
            <td><img src='application/views/front/theme/img/qq.png' width='20px'>：</td>
            <td>2624131747</td>
        </tr>
        <tr>
            <td><img src='application/views/front/theme/img/sk.png' width='20'>：</td>
            <td><a href='skype:daisy.juan2?call'><img src='application/views/front/theme/img/skype.png' style='width:100px'></a></td>
        </tr>
</table>


</div>
 -->