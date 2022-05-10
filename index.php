<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Shop</title>
  <meta name="description" content="Article FRUCTCODE.COM. How to send ajax form.">
  <meta name="author" content="fructcode.com">
    <style type="text/css">
        img:hover{
            cursor: pointer;
        }
        #result_form{
            position: fixed;
            z-index: 1111;
            padding-top: 10%;

            padding-left: 40%;
            font-size: 150%;
            color: #0b91d2;
        }
        .result{
            background: #5a647e;
        }
        input[type=text] {
            padding:10px;
            border:0px;
            box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
        }
        .form_text{
            padding:10px;
            border-radius:10px;

        }
        input{
            padding:10px;
            border-radius:10px;
            width:100%;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="stylesheet/960.css" media="all" />
    <link rel="stylesheet" type="text/css" href="stylesheet/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheet/color.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="stylesheet/ie.css" media="screen" />


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

      <script src="ajaxx.js"></script>


    </head>

    <body>

    <div class="btn__menu" style="    width: 60px;
    padding-top: 15px;
    margin: 0 auto;
    ">
        <img src="pngwing.com.png" class="img_cursor" title="Sony VAIO" alt="" style="width: 50px; height: 50px;"/>
       <p>Корзина</p>

    </div>
        <div class="menu__list" style="display: none;
    padding-top: 15px;
     position: fixed; z-index: 1111; margin-left:40%;">
        <form class="form" name="contact_form" method="post" id="ajax_form"  onsubmit="ym(88717847,'reachGoal','otpravit');  return false;" action="action_ajax_form.php" >
       <div class="form_text">Ваше имя</div><input class="name" type="text" name="name"  /><br>
            <div class="form_text">Ваш номер</div><input class="phone" type="text" name="phonenumber"  /><br>
            <div class="mess" style="background: red;"></div>
            <div class="new__input"></div>
            <button type="submit" id="btn">Сделать заказ</button>
<!--          <input type="button"  id="btn" value="Отправить" />-->
        </form>
        </div>



        <br>
        <div class="s_item grid_2"> <a class="s_thumb" href="#"><img src="images/dummy/pic_5.jpg" title="Armani Acqua di Gioia" alt="Armani Acqua di Gioia" /></a>
            <h3><a href="#">Armani Acqua di Gioia</a></h3>
            <p class="s_model">Product 5</p>
            <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
            <button class="s_button_add_to_cart" style="margin-left: 40%"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></button>
        </div>

        <div class="s_item grid_2"> <a class="s_thumb" href="#"><img src="images/dummy/pic_6.jpg" title="Hennesy Paradis Extra" alt="Hennesy Paradis Extra" /></a>
            <h3><a href="#">Hennesy Paradis Extra</a></h3>
            <p class="s_model">Product 6</p>
            <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
            <button class="s_button_add_to_cart" style="margin-left: 40%"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></button>
        </div>

        <div class="s_item grid_2"> <a class="s_thumb" href="#"><img src="images/dummy/pic_7.jpg" title="Leica M7" alt="Leica M7" /></a>
            <h3><a href="#">Leica M7</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
            <button class="s_button_add_to_cart" style="margin-left: 40%"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></button>
        </div>
    <div id="result_form"></div>
        <div class="s_item grid_2"> <a class="s_thumb" href="#"><img src="images/dummy/pic_8.jpg" title="Sony VAIO" alt="Sony VAIO" /></a>
            <h3><a href="#">Sony VAIO</a></h3>
            <p class="s_model">Product 19</p>
            <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
            <button class="s_button_add_to_cart" style="margin-left: 40%"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></button>
        </div>


        <div class="clear"></div>

<!--        <div id="result_form"></div>-->


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(88717847, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/88717847" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    </body>
    </html>
