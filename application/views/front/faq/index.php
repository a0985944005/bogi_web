
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>常見問題</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->

        <section id="faq">

        <div class="container">



            <div class="row">

                <div class="col-md-10 col-md-offset-1 mar-b-30">

                <div id="heading">
                  <h1 class="wow flipInX" style="font-weight: bold;">常見問題</h1>
                  <p class="lead wow fadeIn">F.A.Q.</p>
                </div>

                    <!--////////// Accordion Toggle //////////-->
                    <div class="panel-group wow fadeInUp" id="accordion" data-wow-duration="2s" style="font-size: 20px; line-height: 27px;letter-spacing: 3px;">




                        <? 
                      foreach($faq_data as $faq)
                      { ?>


                  <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<? echo $faq['id']; ?>">
                                    <? echo $faq['question']; ?>
                                    </a>
                                </h4>
                            </div>

                            <div id="collapse<? echo $faq['id']; ?>" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p><? echo $faq['answer']; ?></p>
                                </div>
                            </div>
                        </div>
            
                        <?   } ?>
                       
                   
                    </div>




                </div><!-- /col-md-10 -->


            </div>
        </div>

    </section>

    

    <div id="newsletter-faq" align="center">


        <div class="container" >
              <button class="btn btn-primary btn-lg active" type="button" style="font-size: 30px; font-weight: bold; " >
                小三通海運，唯獨選寶積
              </button>

        </div><!-- /container -->


    </div>

   

    <!--container end-->



     <!--container start-->
    <div class="container">    
       <div align="center" style="font-size: 32px; padding:1%; font-weight: bold;">其他問題</div>
       <div align="center">OTHER　PROBLEMS</div>
      <hr>
      <div class="row">
       
        <div class="col-lg-12 col-sm-12 address">
          
           <div class="contact-form">
            <form role="form"  method="post" action="index.php/front_index/sendmail">
              <div class="form-group">
                <label for="name">
                  名子
                </label>
                <input type="text"  id="name" name="name" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="email">
                  電子郵件
                </label>
                <input type="text" placeholder="" id="email" name="email" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="phone">
                  電話
                </label>
                <input type="text" id="phone" name="phone" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="phone">
                  內容
                </label>
                <textarea placeholder="" rows="5" id="content" name="content" class="form-control" required="required"></textarea>
              </div>
              <button class="btn btn-info" type="submit">
                送出
              </button>
            </form>

          </div>
        </div>
      </div>

    </div>
    <!--container end-->
     <div style="padding-top: 10%;"></div>
