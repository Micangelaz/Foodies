<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <title>foodies</title>
    <!-- <link rel="stylesheet" href="../../style/styleAll.css">
    <link rel="stylesheet" href="../../style/recipe_style.css"> -->
    <meta name="viewport" content="width=device-width">
    <style>
        <?php include '../../style/styleAll.css'
            ?>
        <?php include '../../style/recipe_style.css'
            ?>
    </style>
    <?php
    require "../../PHP/buttons.php"
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
                            <img src="../../pictures/logo.png" alt="Logo">
                        </div>
                        <ul class="menu__list">
                            <li><a href="../../main.php" class="menu__link">Главная</a></li>
                            <li>
                                <a href="" class="menu__link">Категории</a>
                                <ul class="list__categories">
                                    <li><a href="../../recipes_list/recipes_drink.php" target="_parent">Напитки</a></li>
                                    <li><a href="../../recipes_list/recipes_breakfasts.php"
                                            target="_parent">Завтраки</a></li>
                                    <li><a href="../../recipes_list/recipes_firsts.php" target="_parent">Первые
                                            блюда</a></li>
                                    <li><a href="../../recipes_list/recipes_seconds.php" target="_parent">Вторые
                                            блюда</a></li>
                                    <li><a href="../../recipes_list/recipes_desserts.php" target="_parent">Десерты</a>
                                    </li>
                                    <li><a href="../../recipes_list/recipes_salads.php" target="_parent">Салаты</a></li>
                                </ul>
                            </li>
                            <li><a href="../../find_recipe.php" class="menu__link">Найти рецепт</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Рецепт -->
            <!-- Описание и картинка-->
            <div class="recipe_discription">
                <div class="container">
                    <div class="recipe_discription__row">
                        <div class="recipe__img"><img src="../../pictures/mousse_pear_raspberry.jpg"
                                alt="мусс_груша_малина">
                        </div>
                        <div class="discription">
                            <h1>Нежный мусс с карамелизованной грушей и вишней</h1>
                            <p>Очень вкусный, нежный и легкий мусс на основе желтков с карамелизованной грушей и сочной
                                вишней не займет много времени и отлично подойдёт к романтическому вечеру.

                                <br> <br>Сладкая груша идеально сочетается с кисловатой вишней и нежным кремовым муссом.
                                Быстрый и низкокалорийный десерт!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ингредиенты -->
            <div class="ingredients">
                <div class="container">
                    <div class="ingredients__row">
                        <div class="ingredients__title">Ингредиенты</div>
                        <div class="ingredients__items__row">
                            <div class="ingredients__discription">
                                <ul>
                                    <li>Желток яичный - 4 шт.</li>
                                    <li>Груша - 2 шт.</li>
                                    <li>Вишня - 300 г.</li>
                                    <li>Сахар - 2,5 ст. л.</li>
                                    <li>Корица - о,5 ч. л.</li>
                                    <li>Алкоголь - 50 мл.</li>
                                </ul>
                            </div>
                            <div class="ingredients__other">
                                <ul>
                                    <li>30, мин</li>
                                    <li>2</li>
                                    <li>112 кк (на 100 гр)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Инструкция -->
            <div class="manual">
                <div class="container">
                    <div class="manual__row">
                        <div class="manual__title">Инструкция</div>
                        <div class="manual__items__row">
                            <div class="step__figure">Шаг 1</div>
                            <div class="step__discription">
                                Подготовить все ингредиенты. Груши и яйца тщательно вымыть.
                            </div>
                            <div class="step__figure">Шаг 2</div>
                            <div class="step__discription">
                                Замороженную вишню без косточек промыть водой и положить в сотейник. Добавить 1 ч.л.
                                сахара и нагревать вишню с сахаром на умеренном огне около 5 минут.

                                <br> <br>Для более яркой кислинки во вкусе нежного мусса с карамелизованной грушей и
                                вишней, сахар к вишне можно не добавлять.
                            </div>
                            <div class="step__figure">Шаг 3</div>
                            <div class="step__discription">
                                Груши разрезать пополам, удалить сердцевину и нарезать средним кубиком, примерно такого
                                же размера, как вишня.

                                <br> <br>Можно использовать и замороженную кубиком грушу. Размораживать предварительно
                                ее не нужно.

                                <br> <br>Выложить груши на сковороду с антипригарным покрытием, добавить 1 ст.л. сахара,
                                корицу и на сильном огне готовить груши около 5-7 минут до мягкости и карамелизации
                                сахара.
                            </div>
                            <div class="step__figure">Шаг 4</div>
                            <div class="step__discription">
                                Белки отделить от желтков.
                            </div>
                            <div class="step__figure">Шаг 5</div>
                            <div class="step__discription">
                                К желткам добавить оставшийся сахар и слегка взбить венчиком.
                            </div>
                            <div class="step__figure">Шаг 6</div>
                            <div class="step__discription">
                                В небольшой кастрюле вскипятить немного воды. Миску с желтками поставить на водяную баню
                                и продолжать взбивать желтки венчиком около 6-8 минут до посветления и загустения массы.
                                Очень важно, чтобы вода не касалась дна миски с желтками, иначе желтки сварятся, и крем
                                не получится.

                                <br> <br>Для взрослых в начале нагревания можно добавить немного алкоголя (белого вина,
                                шампанского, коньяка или портвейна, 20-50 мл, зависит от крепости напитка).
                            </div>
                            <div class="step__figure">Шаг 7</div>
                            <div class="step__discription">
                                В порционные креманки или стаканчики положить часть груш, затем слой вишни и снова
                                груши.
                            </div>
                            <div class="step__figure">Шаг 8</div>
                            <div class="step__discription">
                                Сверху выложить яичный мусс и убрать десерт в холодильник на 30 минут, чтобы мусс
                                загустел.
                            </div>
                            <div class="step__figure">Шаг 9</div>
                            <div class="step__discription">
                                Украсить нежный мусс с грушей и вишней ягодами, орешками или мятой и подавать к столу.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Оставить отзыв -->
            <div class="feedback">
                <div class="container">
                    <div class="feedback__row">
                        <form method="post">
                            <div class="feedback__title">Вам понравился рецепт? <br> Дайте нам знать, оставив отзыв!
                            </div>
                            <div class="container_comment">
                                <textarea size="500" name="comment__feedback" placeholder="Ваш комментарий"></textarea>
                            </div>
                            <div class="container_namemail">
                                <textarea class="area" name="name__feedback" csize="30"
                                    placeholder="Ваше имя"></textarea>
                                <textarea size="30" name="email__feedback" placeholder="Ваш email"></textarea>
                            </div>
                            <div class="feedback__button">
                                <input type="submit" name="feedback" value="Отправить">
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