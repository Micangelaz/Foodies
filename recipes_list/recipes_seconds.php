<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>foodies</title>
    <!-- <link rel="stylesheet" href="../style/styleAll.css">
    <link rel="stylesheet" href="../style/recipes_style.css"> -->
    <meta name="viewport" content="width=device-width">
    <style>
        <?php
        include '../style/recipes_style.css'
            ?>
        <?php
        include '../style/styleAll.css'
            ?>
    </style>
    <?php
    include '../PHP/buttons.php'
        ?>
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
                            <img src="../pictures/logo.png" alt="Logo">
                        </div>
                        <ul class="menu__list">
                            <li><a href="../main.php" class="menu__link">Главная</a></li>
                            <li>
                                <a href="" class="menu__link">Категории</a>
                                <ul class="list__categories">
                                    <li><a href="../recipes_list/recipes_drink.php" target="_parent">Напитки</a></li>
                                    <li><a href="../recipes_list/recipes_breakfasts.php" target="_parent">Завтраки</a>
                                    </li>
                                    <li><a href="../recipes_list/recipes_firsts.php" target="_parent">Первые блюда</a>
                                    </li>
                                    <li><a href="../recipes_list/recipes_seconds.php" target="_parent">Вторые блюда</a>
                                    </li>
                                    <li><a href="../recipes_list/recipes_desserts.php" target="_parent">Десерты</a></li>
                                    <li><a href="../recipes_list/recipes_salads.php" target="_parent">Салаты</a></li>
                                </ul>
                            </li>
                            <li><a href="../find_recipe.php" class="menu__link">Найти рецепт</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Рецепты -->
            <div class="recipes">
                <div class="container">
                    <div class="recipes__row">
                        <div class="recipes__title">- Вторые блюда -</div>
                        <div class="recipes">
                            <div class="recipe">
                                <img src="../pictures/индейка_грибы_шпинат.jpeg" alt="Индейка_грибы_шпинат"
                                    class="recipe">
                                <p class="recipes__theTitle">Индейка с грибами и шпинатом</p>
                                <p>Вторые блюда</p>
                                <p class="recipes__description">Идейка с грибами и шпинатом - простой и вкусный ужин при
                                    кето диете. Тем, кто не на диете, рецепт тоже понравится.

                                    Мясо индейки получается сочным и мягким, а грибы и шпинат...</p>
                                <a href="../recipes/seconds/turkey_mushrooms_spinach.php">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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