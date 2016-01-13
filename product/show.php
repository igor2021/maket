<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин_ show</title>
    <link href="../_/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_/css/font-awesome.min.css" rel="stylesheet">
    <link href="../_/css/custom.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../_/js/jquery.infinitecarousel3.js"></script>
    <script src="../_/js/jquery.easing.1.3.js"></script>

    <script type="text/javascript">
        $(function(){
            $('#carousel').infiniteCarousel({
                imagePath: '../images/carousel',
                transitionSpeed:450,
                displayTime: 6000,
                internalThumbnails: false,
                thumbnailType: 'images',
                customClass: 'myCarousel',
                progressRingColorOpacity: '0,0,0,.9',
                progressRingBackgroundOn: true,
                easeLeft: 'easeOutExpo',
                easeRight:'easeOutQuad',
                inView: 1,
                advance: 1,
                autoPilot: true,
                prevNextInternal: true,
                autoHideCaptions: true
            });
        });
    </script>
</head>
<body>

<header>dfdfdfdf</header>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <a href="#">< Назад к результатам поиска</a>
        </div>

        <div class="col-xs-12">
            <h3>ПОДУШКА CLASSIC BY TOGASS "АНТИСТРЕСС", 70x70 см</h3>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div id="carousel">
                    <li><img width="100%" alt="" src="../images/carousel/podushka-00.jpg" /></li>
                    <li><img width="100%" alt="" src="../images/carousel/podushka-01.jpg" /></li>
                    <li><img width="100%" alt="" src="../images/carousel/podushka-02.jpg" /></li>
                    <li><img width="100%" alt="" src="../images/carousel/podushka-03.jpg" /></li>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                <p class="blue_color bold">TOGAS <span class="country_product">(Россия)</span></p>
                <hr class="grey_border">
                <div class="description_product">
                    <p>Подушка с чехлом из уникальной ткани «Антистресс» поможет расслабиться после трудного рабочего дня, а на утро почувствовать силы для новых достижений.</p>
                    <hr class="grey_border">
                    <div class="properties_product">
                        <p>Размер 70x70 см</p>
                        <p>Артикул 123456</p>
                        <a href="#">Вся информация о товаре <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>

                <div class="cart_product">
                    <div class="">
                        <div class="input-group-addon grey_border">
                            <div class="price_cart">
                                3 555 <span class="glyphicon glyphicon-ruble"></span>
                            </div>
                        </div>
                        <div class="input-group-addon grey_border">
                            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-12 col-lg-offset-0">
                                <div class="col-xs-12">
                                    <span class="label_count">количество</span>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default btn_plusminus" type="button"><span class="glyphicon glyphicon-minus"></span></button>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default btn_plusminus" type="button"><span class="glyphicon glyphicon-plus"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group-addon grey_border hidden-xs hidden-sm">
                            <div class="col-lg-3">
                                <a href="#" class="btn btn_buy hidden-xs">купить</a>
                            </div>
                        </div>
                    </div>

                    <div class="visible-xs visible-sm col-xs-12 wrapper_btn">
                        <a href="#" class="btn btn_buy">купить</a>
                    </div>
                </div>
                <div class="col-lg-12">

                    <a class="link_favorites hidden-xs" href="#">Добавить в избранное</a>
                </div>

            </div>
        </div>
        <div class="col-xs-12">
            <h3>Похожие объявления</h3>
            <hr class="blue_line">
            <?php for($i=0;$i<4;$i++):?>
                <div class="col-lg-3 col-xs-12 myadvert">
                    <div class="wrapper_product">
                        <div class="">
                            <div class="image_product">
                                <img src="../images/product/1012365858.jpg">
                                <div class="price_product_xs visible-xs">5 449 Р</div>
                            </div>
                            <div class="info_product hidden-xs">
                                <div class="price_product">
                                    <span class="">5 449 Р</span>
                                    <div class="name_firm">Disney</div>
                                </div>
                            </div>
                            <div class="desc_product">Мягкая игрушка Disney «Сонный Тигруля»</div>
                        </div>
                        <div class="highlight_product">
                            <p class="name_product text-center">Мягкая игрушка "Тигра"</p>
                            <p>Интерактивный плюшевый приятель для вашего малыша. Старый, добрый приятель из великолепного мультфильма.</p>
                            <a class="wrapper_info" href="#">Подробнее</a>
                            <a class="btn btn_product" href="#">Купить</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>
</div>

<?php include "../_/components/php/footer.php"?>
<script src="../_/js/bootstrap.min.js"></script>
</body>
</html>
