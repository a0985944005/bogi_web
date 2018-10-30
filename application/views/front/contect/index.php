        <!--breadcrumbs start-->
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <h1>聯絡我們</h1>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->




   <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
             <div align="center" style="font-size: 32px; padding:1%; font-weight: bold;">服務據點</div>
             <p>SERVICE　BASE</p>
          </div>


          <div class="feature-box">
                    <? 
                      foreach($base_data as $base)
                      { ?>



                            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                <img src="application/views/front/theme/img/company<?=$base['id']?>.png" alt="" width="100" height="100">

                </em>
                <h4>
                  <b><?=$base['name']?></b>
                </h4>
              </div>
              <p class="text-center">
                <?=$base['address']?><br>
                電話:<?=$base['tel']?><br>
                傳真:<?=$base['fax']?>
              </p>
            </div>
                        <?   } ?>
           
          </div>

          <!--feature end-->
        </div>
      </div>
    </div>
 


     <!--container start-->
    <div class="container">    
       <div align="center" style="font-size: 32px; padding:1%; font-weight: bold;">聯絡我們</div>
       <div align="center">CONTECT US</div>
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
