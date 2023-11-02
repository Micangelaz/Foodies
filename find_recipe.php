<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>foodies</title>
    <!-- <link rel="stylesheet" href="style/styleAll.css">
    <link rel="stylesheet" href="style/recipe_style.css">
    <link rel="stylesheet" href="style/find_recipe.css"> -->
    <meta name="viewport" content="width=device-width">
    <style>
        <?php
        include 'style/styleAll.css'
            ?>
        <?php
        include 'style/recipe_style.css'
            ?>
        <?php
        include 'style/find_recipe.css'
            ?>
    </style>
    <?php
    include 'PHP/buttons.php'
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
    <!-- оболочка для демонстрации -->
    <div class="wrapper">
        <!-- контент -->
        <div class="content">
            <!--Меню-->
            <div class="header">
                <div class="container">
                    <div class="header__row">
                        <div class="logo__title">
                            <img src="pictures/logo.png" alt="Logo">
                        </div>
                        <ul class="menu__list">
                            <li><a href="main.php" class="menu__link">Главная</a></li>
                            <li>
                                <a href="" class="menu__link">Категории</a>
                                <ul class="list__categories">
                                    <li><a href="recipes_list/recipes_drink.php" target="_parent">Напитки</a></li>
                                    <li><a href="recipes_list/recipes_breakfasts.php" target="_parent">Завтраки</a></li>
                                    <li><a href="recipes_list/recipes_firsts.php" target="_parent">Первые блюда</a></li>
                                    <li><a href="recipes_list/recipes_seconds.php" target="_parent">Вторые блюда</a>
                                    </li>
                                    <li><a href="recipes_list/recipes_desserts.php" target="_parent">Десерты</a></li>
                                    <li><a href="recipes_list/recipes_salads.php" target="_parent">Салаты</a></li>
                                </ul>
                            </li>
                            <li><a href="find_recipe.php" class="menu__link">Найти рецепт</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Найти Рецепт -->
            <div class="find__recipe">
                <div class="container">
                    <div class="find_recipe__row">
                        <div class="find__title">- Найти рецепт - </div>
                        <div class="recipe__name">
                            <input type="text" placeholder="Название / Категория / Продукт" id="search__text" onkeyup="search()">
                        </div>
                        <div class="filter_title">Результат:</div>
                        <div id="table">
                            <table id="myTable">
                                <thead>
                                    <tr class="header">
                                        <th style="width:25%;">Название</th>
                                        <th style="width:25%;">Категория</th>
                                        <th style="width:25%;">Ингредиенты</th>
                                        <th style="width:25%;">Ссылка</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Омлет с цукини и помидорами</td>
                                        <td>Завтраки</td>
                                        <td>Яйцо куриное, цукини, помидор, молоко, зелень, чеснок, масло растительное,
                                            соль, перец черный</td>
                                        <td><a href="recipes/breakfasts/omelet_with_zucchini.php">Перейти</a></td>
                                    </tr>
                                    <tr>
                                        <td>Мусс с карамелизованной грушей и вишней</td>
                                        <td>Десерты</td>
                                        <td>Желток яичный, Груша, Вишня, Сахар, Корица, Алкоголь</td>
                                        <td><a href="recipes/desserts/mousse_pear_raspberry.php">Перейти</a></td>
                                    </tr>
                                    <tr>
                                        <td>Компот из брусники</td>
                                        <td>Напитки</td>
                                        <td>Брусника, вода, сахар, корица, мандарин</td>
                                        <td><a href="recipes/drinks/cranberry_сompote.php">Перейти</a></td>
                                    </tr>
                                    <tr>
                                        <td>Томатный суп-пюре из свежих помидоров</td>
                                        <td>Первые блюда</td>
                                        <td>Помидоры, перец болгарский, лук красный, бульон, зелень, чеснок, масло
                                            оливковое, Соль, смесь перцев</td>
                                        <td><a href="recipes/firsts/tomato_soup_puree.php">Перейти</a></td>
                                    </tr>
                                    <tr>
                                        <td>Салат с редиской, огурцом и яйцом</td>
                                        <td>Салаты</td>
                                        <td>Огурец, редис, яйцо, укроп, лук зеленый, сметана, соль, перец черный</td>
                                        <td><a href="recipes/salads/radish_cucumber_salad.php">Перейти</a></td>
                                    </tr>
                                    <tr>
                                        <td>Индейка с грибами и шпинатом</td>
                                        <td>Вторые блюда</td>
                                        <td>Индейка, шампиньоны, шпинат, масло сливочное, масло растительное, орех
                                            мускатный, чеснок, перец черный, соль</td>
                                        <td><a href="recipes/seconds/turkey_mushrooms_spinach.php">Перейти</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <script src="JS/find.js"></script>
                </div>
            </div>
            <!-- Оставить рецепт -->
            <div class="feedback">
                <div class="container">
                    <div class="feedback__row">
                        <form method="post">
                            <div class="feedback__title">Не нашли нужный рецепт? <br> Дайте нам знать, чтобы мы добавили
                                его! </div>
                            <div class="container_comment">
                                <textarea size="500" name="comment__find" placeholder="Ваш комментарий"></textarea>
                            </div>
                            <div class="container_namemail">
                                <textarea class="area" name="name__find" size="30" placeholder="Ваше имя"></textarea>
                                <textarea size="30" name="email__find" placeholder="Ваш email"></textarea>
                            </div>
                            <div class="feedback__button">
                                <input type="submit" name="button__find" value="Отправить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <footer class="footer__row">
                <form method="post">
                    <p class="footer__title">Не пропустите новые рецепты!</p>
                    <p class="footer__text">Присоединяйтесь к подписчикам foodies
                        и получайте наши лучшие рецепты каждую неделю!</p>
                    <div class="container_email">
                        <p class="email__place">
                            <input type="text" size="40" name="email" placeholder="Ваш email адрес">
                            <input type="submit" name="subscribe" value="Подписаться">
                        </p>
                    </div>
                    <p class="with__love">with love by Angelika</p>
                </form>
            </footer>
        </div>
    </div>
</body>