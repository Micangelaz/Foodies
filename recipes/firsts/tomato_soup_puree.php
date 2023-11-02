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
                                    <li><a href="../../recipes_list/recipes_breakfasts.php" target="_parent">Завтраки</a></li>
                                    <li><a href="../../recipes_list/recipes_firsts.php" target="_parent">Первые блюда</a></li>
                                    <li><a href="../../recipes_list/recipes_seconds.php" target="_parent">Вторые блюда</a></li>
                                    <li><a href="../../recipes_list/recipes_desserts.php" target="_parent">Десерты</a></li>
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
                        <div class="recipe__img"><img src="../../pictures/tomato_soup_purre.jpeg" alt="Томатный_суп_пюре">
                        </div>
                        <div class="discription">
                            <h1>Томатный суп-пюре из свежих помидоров</h1>
                            <p>Всем любителям томатов рекомендую сохранить этот простой и вкусный рецепт супа-пюре из
                                свежих помидоров. Готовить просто, все ингредиенты понятные. Такой горячий томатный суп
                                станет отличной альтернативой в холодное время года прохладному супу гаспачо. Согреет
                                вас не только своим вкусом, но и ярким цветом.

                                <br> <br>Куриный бульон можно заменить на овощной, и тогда получится постный вариант.
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
                                    <li>Помидоры - 500 г.</li>
                                    <li>Перец болгарский - 150 г.</li>
                                    <li>Лук красный - 80 г.</li>
                                    <li>Бульон - 200 мл.</li>
                                    <li>Зелень - по вкусу</li>
                                    <li>Чеснок - по вкусу</li>
                                    <li>Масло оливковое - 2 ст. л.</li>
                                    <li>Соль - 0,5 ч. л.</li>
                                    <li>Смесь перцев - по вкусу</li>
                                </ul>
                            </div>
                            <div class="ingredients__other">
                                <ul>
                                    <li>40, мин</li>
                                    <li>3</li>
                                    <li>40 кк (на 100 гр)</li>
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
                                Помидоры, как основа супа-пюре, должны быть сладкими и сочными, с мясистой серединкой.

                                <br> <br>Болгарский перец лучше взять красного цвета, такой сорт перца наиболее сладкий.

                                <br> <br>Бульон подойдет из курицы или говядины, но, если будете делать постный вариант,
                                замените его на овощной или грибной бульон.

                                <br> <br>Растительное масло лучше использовать оливковое, для яркости вкуса в томатном
                                супе-пюре. Чеснок и смесь перцев добавляйте по вкусу. Зелень для украшения томатного
                                супа-пюре подойдет любая.


                            </div>
                            <div class="step__figure">Шаг 2</div>
                            <div class="step__discription">
                                Промыть помидоры и болгарский перец под проточной водой.
                            </div>
                            <div class="step__figure">Шаг 3</div>
                            <div class="step__discription">
                                Очистить сладкий перец от сердцевины, нарезать на небольшие кусочки.

                                <br> <br>При желании, можно запечь перец в духовке и очистить от кожуры. Запечённый
                                перец придаст пикантности томатному супу-пюре.
                            </div>
                            <div class="step__figure">Шаг 4</div>
                            <div class="step__discription">
                                Подготовить помидоры для очистки кожуры. Сделать надрез крест на крест на каждом
                                помидоре, лучше это делать острым ножом.
                            </div>
                            <div class="step__figure">Шаг 5</div>
                            <div class="step__discription">
                                Положить все помидоры в глубокую миску, затем их нужно залить кипятком. Вода должна
                                полностью покрывать томаты. Оставить помидоры в кипятке на 5 минут.
                            </div>
                            <div class="step__figure">Шаг 6</div>
                            <div class="step__discription">
                                Слить горячую воду с помидоров, залить их холодной водой. Благодаря контрасту
                                температуры получится очень легко очистить томаты от кожуры.

                                <br> <br>Аккуратно снять кожуру с помидоров и подготовить их к нарезке.
                            </div>
                            <div class="step__figure">Шаг 7</div>
                            <div class="step__discription">
                                Вырезать жёсткую часть из помидоров, нарезать их на дольки.
                            </div>
                            <div class="step__figure">Шаг 8</div>
                            <div class="step__discription">
                                Нарезать мелко лук, можно использовать красный сладкий лук или лук шалот для вкуса.
                            </div>
                            <div class="step__figure">Шаг 9</div>
                            <div class="step__discription">
                                Добавить к нарезанному луку нарезанный зубчик чеснока. Если вы не любите чеснок, тогда
                                пропустите этот этап.
                            </div>
                            <div class="step__figure">Шаг 10</div>
                            <div class="step__discription">
                                Обжарить в сотейнике с толстым дном лук с чесноком до золотистого цвета, с добавлением 2
                                столовых ложек оливкового масла. Также можно использовать кастрюлю с толстым дном.
                            </div>
                            <div class="step__figure">Шаг 11</div>
                            <div class="step__discription">
                                Добавить нарезанный сладкий перец и помидоры в сотейник к обжаренному луку с чесноком.
                                Всё хорошо перемешать и потушить пару минут. Овощи должны впитать в себя вкус и аромат
                                масла с луком, огонь должен быть средним.
                            </div>
                            <div class="step__figure">Шаг 12</div>
                            <div class="step__discription">
                                Влить бульон к овощам и добавить соль, накрыть крышкой сотейник и тушить 20 минут все
                                овощи до мягкости. Огонь нужно сделать чуть ниже среднего.
                            </div>
                            <div class="step__figure">Шаг 13</div>
                            <div class="step__discription">
                                Влить бульон к овощам и добавить соль, накрыть крышкой сотейник и тушить 20 минут все
                                овощи до мягкости. Огонь нужно сделать чуть ниже среднего.
                            </div>
                            <div class="step__figure">Шаг 14</div>
                            <div class="step__discription">
                                Попробовать томатный суп-пюре. Если помидоры слишком кислые, тогда добавить немного
                                сахара для вкуса и соли по необходимости.

                                <br> <br>Перебить погружным блендером суп до однородности. Если порция небольшая, на
                                двоих, тогда суп-пюре из свежих помидоров можно сразу разливать по тарелкам. Но, если
                                порция больше, и будет храниться в холодильнике, тогда суп нужно ещё раз довести до
                                кипения. Тогда суп-пюре не прокиснет и хорошо будет храниться ещё сутки в холодильнике.
                            </div>
                            <div class="step__figure">Шаг 15</div>
                            <div class="step__discription">
                                Разлить горячий томатный суп-пюре по тарелкам. Добавить немного зелени и смеси перцев
                                для вкуса. Также можно добавить немного оливкового масла. Суп-пюре получается очень
                                ароматным, ярким по вкусу и цвету. Вкусно есть суп-пюре с гренками или хлебными
                                палочками. Такое первое блюдо отлично дополнит основное блюдо из мяса или рыбы.

                                <br> <br>Томатный суп-пюре из свежих помидоров готов. Приятного аппетита.
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