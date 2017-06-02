
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
                <li class = "active"><a href= "#">Войти </a></li>

                <li><a href= "search.html">Регистрация</a></li>
            </ul>
        </div>
    </div>

</div>

<div class = "container search_container_bg">
    <div class = "col-lg-4 "></div>
    <div class = "col-lg-4 ">
        <div class = "jumbotron login_box">
            <form>
                <div class = "form-group">
                    <input type = "email"  class = "form-control" placeholder="Логин">
                </div>
                <div class = "form-group">
                    <input type = "password"  class = "form-control" placeholder="Пароль">
                </div>
                <div class = "checkbox">
                    <label>
                    <input type = "checkbox">
                        Запомнить меня
                    </label>
                </div>
                <button type = "submit" class = "btn btn-primary from-control">Войти</button>
            </form>
    </div>
    <div class = "col-lg-4 "></div>





    </div>

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