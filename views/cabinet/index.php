<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container" style="margin-top: 10%; margin-left: 20%">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4>Привет, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/cart">Корзина</a></li>
                <li><a href="/">Главная</a></li>
                <li><a href="/user/logout">Выйти</a></li>
            </ul>
            
        </div>
    </div>
</section>