<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>foodies</title>
    <!-- <link rel="stylesheet" href="style/styleAll.css">
    <link rel="stylesheet" href="style/main_style.css"> -->
    <style>
        <?php
        include 'style/main_style.css'
        ?>
        <?php
        include 'style/styleAll.css'
        ?>
    </style>
    <?php
    include 'PHP/buttons.php'
    ?>
    <meta name="viewport" content="width=device-width">
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
                                    <li><a href="recipes_list/recipes_seconds.php" target="_parent">Вторые блюда</a></li>
                                    <li><a href="recipes_list/recipes_desserts.php" target="_parent">Десерты</a></li>
                                    <li><a href="recipes_list/recipes_salads.php" target="_parent">Салаты</a></li>
                                </ul>
                            </li>
                            <li><a href="find_recipe.php" class="menu__link">Найти рецепт</a></li>
                        </ul>
                    </div>
                </div>
            </div>
             <!--Приветствие-->
             <div class="welcom">
                <div class="container">
                    <div class="welcom__row">
                        <div class="welcom__row__title"><h1>Добро пожаловать в foodies!</h1>
                            <br>Именно здесь Вы найдете вкусные и легкие рецепты</div>
                    </div>
                </div>
            </div>
             <!--Категории-->
             <div class="categories">
                <div class="container">
                    <div class="categories__row">
                    <div class="category"> 
                        <a href="recipes_list/recipes_drink.php"><img src="pictures/напитки.jpg" alt="Напитки"  class = "circle">
                            Напитки
                        </a>
                    </div>
                    <div class="category"> 
                        <a href="recipes_list/recipes_breakfasts.php"><img src="pictures/завтраки.jpg" alt="Завтраки"  class = "circle">
                            Завтраки
                        </a>
                    </div>
                    <div class="category"> 
                        <a href="recipes_list/recipes_firsts.php"><img src="pictures/супы.webp" alt="Первые блюда"  class = "circle">
                            Первые блюда
                        </a>
                    </div>
                    <div class="category"> 
                        <a href="recipes_list/recipes_seconds.php"><img src="pictures/вторые блюда.webp" alt="Вторые блюда"  class = "circle">
                            Вторые блюда
                        </a>
                    </div>
                    <div class="category"> 
                        <a href="recipes_list/recipes_desserts.php"><img src="pictures/десерты.jpg" alt="Десерты"  class = "circle">
                            Десерты
                        </a>
                    </div>
                    <div class="category"> 
                        <a href="recipes_list/recipes_salads.php"><img src="pictures/салаты.jpg" alt="Салаты"  class = "circle">
                            Салаты
                        </a>
                    </div>
                </div>
                </div>
            </div>
            <!-- Последние рецепты -->
            <div class="last__recipes">
                <div class="container">
                    <div class="last__recipes__row">
                        <div class="last__recipes__title">- Последние рецепты -</div>
                        <div class="recipes">
                            <div class="recipe">
                                <img src="pictures/компот_брусника.jpg" alt="Компот_брусника" class = "recipe">
                                <p class="last__recipes__theTitle">Компот из брусники</p>
                                <p>Напитки</p> 
                                <p class="last__recipes__description">Брусника — маленькая северная ягода, которая испокон веков ценилась на Руси очень 
                                        высоко. Императрица Елизавета Петровна поручала высаживать ее в садах близ дворцов, 
                                        чтобы на царском столе всегда были свежие ягоды брусники...</p>
                                <a href="recipes/drinks/cranberry_сompote.php">Подробнее</a>
                            </div>

                            <div class="recipe">
                            <img src="pictures/омлет_цукини.jpg" alt="омлет_с_цукини" class = "recipe">
                                <p class="last__recipes__theTitle">Омлет с цукини и помидорами</p>
                                <p>Завтраки</p> 
                                <p class="last__recipes__description">Омлет с цукини и помидорами хорош как на завтрак, так и
                                    на ужин. Кстати, в холодном виде на перекус он тоже подходит.
                                    Вообще омлет с овощами чем-то похож на всем известную...</p>
                                <a href="recipes/breakfasts/omelet_with_zucchini.php">Подробнее</a>
                            </div>

                            <div class="recipe">
                                <img src="pictures/mousse_pear_raspberry.jpg" alt="мусс_груша_малина" class = "recipe">
                                <p class="last__recipes__theTitle">Мусс с карамелизованной грушей и вишней</p>
                                <p>Напитки</p> 
                                <p class="last__recipes__description">Очень вкусный, нежный и легкий мусс на основе желтков с
                                    карамелизованной грушей и сочной вишней не займет много времени и отлично подойдёт к
                                    романтическому вечеру....</p>
                                <a href="recipes/desserts/mousse_pear_raspberry.php">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer  class="footer__row">
                <form method="POST" action="#" >
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