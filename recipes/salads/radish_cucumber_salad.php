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
                        <div class="recipe__img"><img src="../../pictures/radish_cucumber_salad.jpg"
                                alt="салат_редис_огурец_яйцо">
                        </div>
                        <div class="discription">
                            <h1>Салат с редиской, огурцом и яйцом</h1>
                            <p>Много лет назад, когда мы не были еще избалованы круглогодичными овощами, этот салат
                                делали только с самой свежей и ароматной редиской, хрустящими огурчиками с грядки и
                                ярким желтком домашних яиц. Он идеально сочетался, да и сейчас сочетается с отварной
                                картошкой в масле, и больше ничего не нужно. Любимый обед из детства и, кажется, на все
                                времена.
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
                                    <li>Огурец - 3 шт.</li>
                                    <li>Редис - 5 шт.</li>
                                    <li>Яйцо - 3 шт.</li>
                                    <li>Укроп - 5 веточек</li>
                                    <li>Лук зеленый - 3 веточки</li>
                                    <li>Сметана - 2 ст. л.</li>
                                    <li>Соль - по вкусу</li>
                                    <li>Перец черный - по вкусу</li>
                                </ul>
                            </div>
                            <div class="ingredients__other">
                                <ul>
                                    <li>25, мин</li>
                                    <li>4</li>
                                    <li>69 кк (на 100 мл)</li>
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
                                Подготовить ингредиенты для салата с редиской, огурцом и яйцом.

                                <br> <br>Отрезать у редиса ботву и хорошо промыть. Убедитесь, что нигде не осталось
                                земли. Выбирайте самую свежую, сочную редиску.

                                <br> <br>Огурцы и зелень так же нужно предварительно промыть и обсушить.

                                <br> <br>Для рецепта нам понадобятся яйца. Их нужно предварительно отварить и остудить.
                                Для получения идеальной консистенции желтка, отваривайте яйца после закипания воды в
                                течение 7 минут. Далее сразу переложите яйца в холодную воду, чтобы остановить процесс
                                готовки. У вас получится нежный желток.

                                <br> <br>В качестве заправки в рецепте используется сметана. Лучше всего брать сметану с
                                жирностью не менее 20%. У нее более густая консистенция и ярко выраженный сливочный
                                вкус.
                            </div>
                            <div class="step__figure">Шаг 2</div>
                            <div class="step__discription">
                                Отрезать у огурцов кончики. Разрезать пополам и нарезать их на тонкие дольки.

                                <br> <br>Если у вас большие огурцы, то разрезать их на 4 части и только потом нарезать
                                на дольки.
                            </div>
                            <div class="step__figure">Шаг 3</div>
                            <div class="step__discription">
                                Отрезать у редиски хвостики. Разрезать ее пополам и далее так же нарезать на тонкие
                                дольки.

                                <br> <br>Если вам попалась крупная редиска, то нужно разрезать её на 4 части и после
                                нарезать на дольки.

                                <br> <br>Обратите внимание на то, что в рецепте ингредиенты используются в штуках. Это
                                примерное количество, так как величина огурцов и редиса может отличаться. Нужно
                                ориентироваться на то, чтобы по объёму редиса, огурцов и яиц было примерно равное
                                количество. Так вам легче будет корректировать объем порции салата, исходя из
                                потребностей вашей семьи.
                            </div>
                            <div class="step__figure">Шаг 4</div>
                            <div class="step__discription">
                                Выложить нарезанные огурцы и редис в глубокую чашку.
                            </div>
                            <div class="step__figure">Шаг 5</div>
                            <div class="step__discription">
                                Очистить яйца от скорлупы. Разрезать каждое яйцо пополам и далее снова пополам. После
                                нарезать яйца на небольшие дольки.
                            </div>
                            <div class="step__figure">Шаг 6</div>
                            <div class="step__discription">
                                Отрезать у укропа жёсткий стебель, для рецепта нам будет нужна только нежная зелень
                                укропа. Мелко нарезать ее.
                            </div>
                            <div class="step__figure">Шаг 7</div>
                            <div class="step__discription">
                                Мелко нарезать зелёный лук. Обратите внимание на то, что белая часть зелёного лука даёт
                                ему остроту. Если вы хотите сделать вкус салата более нежным, то отрежьте белую часть и
                                используйте в салат только зеленые перья лука. Но не стоит убирать лук из салата
                                полностью. Он даёт очень свежий аромат готовому салату.
                            </div>
                            <div class="step__figure">Шаг 8</div>
                            <div class="step__discription">
                                Выложить в чашку с огурцами и редиской нарезанные яйца, укроп и зелёный лук. Добавить
                                сметану, соль и чёрный перец. Лучше, если он будет свежесмолотым.
                            </div>
                            <div class="step__figure">Шаг 9</div>
                            <div class="step__discription">
                                Перемешать салат с огурцами, редиской и яйцом так, чтобы сметана равномерно
                                распределилась по всем составляющим. Сразу подавать салат к столу.

                                <br> <br>Если вы хотите сделать салат заранее, то нужно нарезать все составляющие,
                                переложить их в глубокую чашку, накрыть пищевой плёнкой и убрать в холодильник.
                                Заправить салат сметаной, солью и перцем уже непосредственно перед подачей его на стол.

                                <br> <br>Это нужно для того, чтобы овощи не дали сок и оставались максимально свежими и
                                хрустящими.
                            </div>
                            <div class="step__figure">Шаг 10</div>
                            <div class="step__discription">
                                Подавать салат можно как в общем салатнике, так и разложив его по порционным блюдам.

                                <br> <br>Салат с редиской, огурцами и яйцом готов. Приятного аппетита!
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