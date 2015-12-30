<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин_ show</title>
    <link href="../_/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_/css/font-awesome.min.css" rel="stylesheet">
    <link href="../_/css/custom.css" rel="stylesheet">
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
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                <div id="carousel">
                    <li><img width="540" height="405" alt="" src="../images/carousel/podushka-00.jpg" /></li>
                    <li><img width="540" height="405" alt="" src="../images/carousel/podushka-01.jpg" /></li>
                    <li><img width="540" height="405" alt="" src="../images/carousel/podushka-02.jpg" /></li>
                    <li><img width="540" height="405" alt="" src="../images/carousel/podushka-03.jpg" /></li>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">

                <p>TOGAS <span class="country_product">(Россия)</span></p>
                <hr class="">
                <div class="description_product">
                    <p>Подушка с чехлом из уникальной ткани «Антистресс» поможет расслабиться после трудного рабочего дня, а на утро почувствовать силы для новых достижений.</p>
                    <div class="properties_product">
                        <p>Размер 70x70 см</p>
                        <p>Артикул 123456</p>
                        <a href="#">Вся информация о товаре <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <h3>Похожие объявления</h3>
            <hr class="blue_line">
        </div>
    </div>
</div>

<?php include "../_/components/php/footer.php"?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="../_/js/bootstrap.min.js"></script>
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
</body>
</html>
