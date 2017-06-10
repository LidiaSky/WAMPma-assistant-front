
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Поиск статей</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/customized.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class=" navbar navbar-default navbar-fixed-top" role = "navigation">
    <div class = "container-fluid">
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target=".navbar-collapse">
                <span class = "sr-only">Toggle navigation</span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href = "index.html">Мультиагентный ассистент студента</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class = "nav navbar-nav navbar-right">
                <li ><a href= "search.php">Поиск</a></li>
                <li><a href= "#">Войти </a></li>

                <li class = "active"><a href= "search.html">Регистрация</a></li>
            </ul>
        </div>
    </div>

</div>

<div class = "container-fluid">
    <section class = "container register_bgr">
        <div class = "container-page">
            <div class = "col-md-6">
                <h3 class ="dark-grey">Регистрация</h3>

                <div class = "form-graup col-lg-12">
                    <label>Имя пользователя</label>
                    <input type = "" name ="" class = "form-control" id = "" value = "">
                </div>

                <div class = "form-group col-lg-6">
                    <label> Пароль</label>
                    <input type ="password" name = "" class = "form-control" id = "" value = "">
                </div>

                <div class="form-group col-lg-6">
                    <label>Повторите пароль</label>
                    <input type="password" name="" class="form-control" id="" value="">
                </div>

                <div class="form-group col-lg-6">
                    <label>Email</label>
                    <input type="" name="" class="form-control" id="" value="">
                </div>

                <div class="form-group col-lg-6">
                    <label>Повторите Email</label>
                    <input type="" name="" class="form-control" id="" value="">
                </div>
                <div class="form-group col-lg-6">
                    <label>Дата рождения</label>
                    <input type="" name="" class="form-control" id="" value="">
                </div>

                <div class="form-group col-lg-6">
                    <label>Название вуза</label>
                    <input type="" name="" class="form-control" id="" value="">
                </div>
                <div class="form-group col-lg-6">
                    <label>Ученая степень (при наличии)</label>
                    <input type="" name="" class="form-control" id="" value="">
                </div>

                <div class="form-group col-lg-6">
                    <label>Сфера научных интересов</label>
                    <input type="" name="" class="form-control" id="" value="">
                </div>


            </div>

            <div class="col-md-6">
                <h3 class="dark-grey"> Условия использования сервиса</h3>
                <p>
                    Нажимая кнопку зарегистрироваться, Вы соглашаетесь с Условиями использования сервиса мультиагениный ассистент студента.

                </p>
                <p>
                    Администрация сервиса вправе хранить, использовать и передавать третим лицам ваши пользовательские данные.
                </p>
                <p>
                    Администрация сервиса не несет ответственность за содержание статей.
                </p>
                <p>
                    Администрация сервиса не несет ответственность за предоставление достоверных данных о конференциях.
                </p>
                <p>
                    Администрация сервиса вправе закрывать доступ к сервису определенным пользователям без объяснения причины.
                </p>

                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </div>
            </div>
        </div>
    </section>
</div>
<div class = "navbar navbar-inverse navbar-fixed-bottom" role="navigetion">
    <div class = "container">
        <div class = "navbar-text pull-left">
            <p> 2017 Кафедра вычислительных технологий КубГУ</p>
        </div>
        <div class = "navbar-text pull-right">
            <a href="http://www.cs.kubsu.ru/ru/about.html"><i class = "fa fa-external-link"></i></a>


        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>