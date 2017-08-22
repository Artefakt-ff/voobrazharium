<!DOCTYPE html>
<html>
<head>
    <meta lang="ru" charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="description"
          content="Занятие ментальной арифметикой для детей в городе Новоуральске. Первой занятие бесплатно!">
    <title>Ментальная арифметика в Новоуральске</title>
    <link rel="stylesheet" href="css/bootstrap.min.glyphicons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fullpage.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<nav class="nav nav-justified justify-content-center" id="menu">
    <div id="active"><a class="nav-link active" onclick="menuChanger('main')" id="main" href="#main">Главная</a></div>
    <div><a class="nav-link" id="about" onclick="menuChanger('about')" href="#about">Подробнее</a></div>
    <div><a class="nav-link" id="gallery" onclick="menuChanger('gallery')" href="#gallery">Галерея</a></div>
    <div><a class="nav-link" id="free_lesson" onclick="menuChanger('free_lesson')" href="#free_lesson">Бесплатное
            занятие!</a></div>
</nav>
<div id="fullpage">
    <div class="section active" id="main_page">
        <div class="content container">
            <h1>Развитие Ваших детей в Новоуральске!</h1>
            <h3>узнать больше</h3>
            <span id="next" class="glyphicon glyphicon-chevron-down"
                  onclick="$.fn.fullpage.moveSectionDown(); menuChanger('about')"></span>
        </div>
    </div>
    <div class="section" id="details">
        <div class="container centered">
            <div class="row centered">
                <div class="col-md-4">
                    <div class="project" id="project_1">
                        <a href="projects/project1.html"><img src="images/projects/project1.png"
                                                              alt="Первый проект"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project" id="project_2">
                        <img src="images/projects/project2.png" alt="Первый проект">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project" id="project_3">
                        <img src="images/projects/project3.png" alt="Первый проект">
                    </div>
                </div>
            </div>
            <div class="row centered" id="margined-top_row">
                <div class="col-md-4">
                    <div class="project" id="project_1">
                        <img src="images/projects/project4.png" alt="Первый проект">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project" id="project_2">
                        <img src="images/projects/project5.png" alt="Первый проект">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                </div>
                <div class="col-md-3">
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                </div>
                <div class="col-md-3">
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                </div>
                <div class="col-md-3">
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                    <a href="images/wa5.jpg" data-lightbox="projects"><img src="images/wa5.jpg"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="call_to_action">
        <div class="container">
            <h1>Запишись на первое <span id="free">бесплатное</span> занятие прямо сейчас!</h1>
            <h4>Просто оставьте свои контакты и мы свяжемся с Вами в ближайшее время!</h4>
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="mail.php">
                        <div class="form-group">
                            <label for="name">Ваше имя:</label>
                            <input class="form-control" id="name" type="text" placeholder="Введите Ваше имя">
                            <label for="email">Ваш E-mail:</label>
                            <input class="form-control" id="email" type="email" placeholder="Введите Ваш E-mail">
                            <label for="tel">Ваш телефон:</label>
                            <input class="form-control" id="tel" type="tel" placeholder="Введите Ваш телефон">
                            <input type="submit" value="Отправить" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4>Посетите нашу группу ВК:</h4>
                    <a href="#"></a><img src="images/icon_vk.png" alt="Вконтакте"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#fullpage').fullpage({
            scrollingSpeed: 700,
            sectionsColor: ['#f2f2f2', '#FFF', '#7BAABE'],
            anchors: ['main', 'about', 'gallery', 'free_lesson']
        });
    });
</script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/jquery.fullpage.min.js"></script>
<script async type="text/javascript" src="js/main.js"></script>
<script>
    lightbox.option({
        'albumLabel': "Фотография %1 из %2",
        'wrapAround': true
    })
</script>
<script>
    $(document).ready(function () {
        menuChanger();
    })
</script>
</body>
</html>