<!DOCTYPE html>
<html>
    
	<head>
		<title>Фото</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link href="css/reset.css" rel="stylesheet">
        <link href="lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
    
    <body>
        
        <div class="container">
        <h3>Меню</h3>
<!--Абзац для ссылки на страницу сайта-->
<p>
<!--Ссылка на страницу сайта-->
<a href="index.php"
<!--Картинка маркера перед названием страницы-->
<img src="1.png">
<!--Название страницы
style="margin-left:5px;" - отступ названия от маркера-->
<span style="margin-left:5px;">Главная</span></a>
<!--Закрываем абзац-->
</p>
<p>
<a href="projects.php">
<img src="2.png">
<span style="margin-left:5px;">Мои проекты</span;></a>
</p>
<p>
<a href="gallery.php">
<img src="3.png">
<span style="margin-left:5px;">Фото</span></a>
</p>
            <h1>Фото галлерея</h1>

            <div id="gallery">

                <figure class="photo">
                    <a href="img/originals/img-01.jpg" data-lightbox="roadtrip" data-title="Фото из Абхазии"><img src="img/img-01-min.jpg" alt="Фото из Абхазии" /></a>
                    <figcaption>Фото из Абхазии</figcaption>
                </figure>

                <figure class="photo">
                    <a href="img/originals/img-02.jpg" data-lightbox="roadtrip" data-title="Фото из Дня Здоровья"><img src="img/img-02-min.jpg" alt="Фото из Дня Здоровья" /></a>
                    <figcaption>Фото из Дня Здоровья</figcaption>
                </figure>

                <figure class="photo">
                    <a href="img/originals/img-03.jpg" data-lightbox="roadtrip" data-title="Кот с бантиком"><img src="img/img-03-min.jpg" alt="Кот с бантиком" /></a>
                    <figcaption>Кот с бантиком</figcaption>
                </figure>

                <figure class="photo">
                    <a href="img/originals/img-04.jpg" data-lightbox="roadtrip" data-title="Костюм Кощея"><img src="img/img-04-min.jpg" alt="Костюм Кощея" /></a>
                    <figcaption>Костюм Кощея</figcaption>
                </figure>

                <figure class="photo">
                    <a href="img/originals/img-05.jpg" data-lightbox="roadtrip" data-title="Тень"><img src="img/img-05-min.jpg" alt="Тень" /></a>
                    <figcaption>Тень</figcaption>
                </figure>

                <figure class="photo">
                    <a href="img/originals/img-06.jpg" data-lightbox="roadtrip" data-title="Мой питомец"><img src="img/img-06-min.jpg" alt="Мой питомец" /></a>
                    <figcaption>Мой питомец</figcaption>
                </figure>

                 </div>
        </div>
        
        <script src="lightbox/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>