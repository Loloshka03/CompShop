<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://bootstrap-3.ru/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://bootstrap-3.ru/examples/dashboard/dashboard.css" rel="stylesheet">
        <link href="/ui/css/main.css" rel="stylesheet">
        <link href="/ui/css/price-range.css" rel="stylesheet">

    </head>
                    <body>
                        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">CompShop</a>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                          <?php if (User::isGuest()): ?> 
                                            <li><a href="/">Главная</a></li>
                                            <li><a href="user/register">Регистрация</a></li>
                                            <li><a href="user/login">Вход</a></li>
                                            <?php else: ?>
                                            <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                         <div class="row">
                             <div class="col-sm-3 col-md-2 sidebar">
                                 <ul class="nav nav-sidebar">
                                     <li class="active"><a href="/">Главная</a></li>
                                     <li><a href="/processors">Процессоры</a></li>
                                     <li><a href="#">Материнские платы</a></li>
                                     <li><a href="#">Оперативная память</a></li>
                                     <li><a href="#">Блоки питания</a></li>
                                     <li><a href="#">Видеокарты</a></li>
                                     <li><a href="#">Жесткие диски и SSD</a></li>
                                     <li><a href="#">Корпуса</a></li>
                                     <li><a href="#">Звуковые карты</a></li>
                                     <li><a href="#">Куллеры</a></li>
                                 </ul>
                             </div>

                         </div>
                     </div>

                            <script type="text/javascript" src="ui/js/jquery.min.js" charset="utf-8"></script>
                            <script type="text/javascript" src="ui/js/bootstrap.min.js" charset="utf-8"></script>
                    </body>
</html>
