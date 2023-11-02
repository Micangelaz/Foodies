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
                        <div class="recipe__img"><img src="../../pictures/индейка_грибы_шпинат.jpeg"
                                alt="индейка_грибы_шпинат">
                        </div>
                        <div class="discription">
                            <h1>Индейка с грибами и шпинатом</h1>
                            <p>Идейка с грибами и шпинатом - простой и вкусный ужин при кето диете. Тем, кто не на
                                диете, рецепт тоже понравится.

                                <br> <br>Мясо индейки получается сочным и мягким, а грибы и шпинат, тушенные в сливочном
                                масле, заменят гарнир. Самое удобное в этом рецепте, что не нужно ингредиенты готовить
                                отдельно. Всё жарится и тушится в одной сковородке.

                                <br> <br>За 30 минут вы получите вкусный ужин с большим количеством белков и жиров. А
                                углеводы здесь сведены на минимум по всем правилам кето рациона. В 100 граммах готового
                                блюда: 10 г белков и 10 г жиров, а углеводов всего 0,6 г.
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
                                    <li>Индейка - 300 г.</li>
                                    <li>Шампиньоны - 150 г.</li>
                                    <li>Шпинат - 100 г.</li>
                                    <li>Масло сливочное - 20 г.</li>
                                    <li>Масло растительное -  1,5 ст. л.</li>
                                    <li>Орех мускатный - 1 щепотка</li>
                                    <li>Чеснок - по вкусу</li>
                                    <li>Перец черный - по вкусу</li>
                                    <li>Соль - по вкусу</li>
                                </ul>
                            </div>
                            <div class="ingredients__other">
                                <ul>
                                    <li>30, мин</li>
                                    <li>2</li>
                                    <li>132 кк (на 100 гр)</li>
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
                                Подготовить все необходимые ингредиенты для кето индейки с грибами и шпинатом.

                                <br> <br>Я выбрала филе бедра индейки для приготовления, так как мясо этой части птицы
                                имеет насыщенный вкус, получается мягким и очень сочным в сравнении с филе индейки. В
                                жареном виде хорошо раскрывается вкус птицы.

                                <br> <br>Грибы можно взять как шампиньоны, так и вишенки. Главное, чтобы они были
                                молодыми.

                                <br> <br>Лучше всего использовать свежие листья шпината, но, если вы не смогли купить
                                свежий шпинат, можно использовать замороженный.

                                <br> <br>Обязательно кусочек хорошего сливочного масла 82,5 % жирности. Растительное
                                масло можно взять оливковое, кунжутное, арахисовое или масло авокадо. Эти растительное
                                масла чаще всего рекомендуют использовать при кето диете.
                            </div>
                            <div class="step__figure">Шаг 2</div>
                            <div class="step__discription">
                                Промыть шпинат. Делать это нужно тщательно, если шпинат имеет корень. В мелких листочках
                                шпината часто остаются крупинки песка и почвы.

                                <br> <br>Оставить промытые листья шпината в дуршлаге, чтобы стекла лишняя влага. Также
                                можно промокнуть шпинат бумажным полотенцем. Отделить длинные стебельки от листьев
                                шпината.
                            </div>
                            <div class="step__figure">Шаг 3</div>
                            <div class="step__discription">
                                Подготовить шампиньоны: тщательно промыть, убрать крупинки грунта, срезать тёмный край
                                на ножке. Если грибы крупные, тогда их следует разрезать на 2-4 части, в зависимости от
                                размера шляпки шампиньона.
                            </div>
                            <div class="step__figure">Шаг 4</div>
                            <div class="step__discription">
                                Промыть, обсушить филе бедра индейки. Нарезать мясо на одинаковые кусочки продолговатой
                                формы. Срезать прожилки, жирок и пленки, если они есть. Если мясо индейки молодое, тогда
                                его не следует отбивать, оно будет мягким после обжарки. Но, если вы не уверены в
                                качестве птицы, можно слегка отбить нарезанные кусочки индейки.
                            </div>
                            <div class="step__figure">Шаг 5</div>
                            <div class="step__discription">
                                Разогреть сковородку на среднем огне, добавить оливковое масло, распределить его
                                кисточкой по дну сковороды. Выложить в один слой нарезанные кусочки индейки. Обжарить
                                пару минут, затем перемешать.
                            </div>
                            <div class="step__figure">Шаг 6</div>
                            <div class="step__discription">
                                Добавить немного соли, свежесмолотого чёрного перца и мускатный орех. У меня мускатный
                                орех был целый, поэтому я натерла его на тёрке. Если у вас молотый мускатный орех,
                                добавьте щепотку, больше не надо, так как он имеет достаточно сильный аромат и ярко
                                выраженный вкус.

                                <br> <br>Перемешать мясо со специями, при необходимости добавить немного оливкового
                                масла в сковороду.
                            </div>
                            <div class="step__figure">Шаг 7</div>
                            <div class="step__discription">
                                Высыпать грибы к мясу, перемешать и обжарить на среднем огне до мягкости, это займёт
                                пару минут. Долго жарить на этом этапе грибы с мясом не нужно.
                            </div>
                            <div class="step__figure">Шаг 8</div>
                            <div class="step__discription">
                                Выложить листья шпината сверху на мясо с грибами, огонь нужно слегка убавить. Перейти к
                                следующему этапу приготовления.
                            </div>
                            <div class="step__figure">Шаг 9</div>
                            <div class="step__discription">
                                Положить кусочек сливочного масла на листья шпината и накрыть сковороду крышкой. На этом
                                этапе не нужно перемешивать листья шпината с мясом индейки и грибами. Они должны
                                уменьшиться в объеме под крышкой. Как только сливочное масло полностью растает, можно
                                открыть крышку и перемешать шпинат.

                                <br> <br>Спустя 2-3 минуты выключить огонь и убрать блюдо из сковороды. Если всё сделано
                                верно, шпинат будет иметь красивый зелёный цвет и нежный вкус благодаря сливочному
                                маслу.
                            </div>
                            <div class="step__figure">Шаг 10</div>
                            <div class="step__discription">
                                Добавить 1 зубчик измельчённого чеснока к кето индейке с грибами и шпинатом. Блюдо
                                станет очень ароматным и аппетитным. Если вы не любите чеснок, этот этап можно
                                пропустить. Также можно добавить любимую зелень при желании.
                            </div>
                            <div class="step__figure">Шаг 11</div>
                            <div class="step__discription">
                                Подать кето индейку горячей. Мясо индейки получается мягким и ароматным благодаря
                                мускатному ореху. Сочный гарнир из шпината и шампиньонов отлично дополняет блюдо.
                                Приятного аппетита.
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