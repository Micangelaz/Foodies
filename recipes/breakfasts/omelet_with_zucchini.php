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
                        <div class="recipe__img"><img src="../../pictures/омлет_цукини.jpg" alt="омлет_с_цукини">
                        </div>
                        <div class="discription">
                            <h1>Омлет с цукини и помидорами</h1>
                            <p>Омлет с цукини и помидорами хорош как на завтрак, так и на ужин. Кстати, в холодном виде
                                на перекус он тоже подходит.

                                <br> <br>Вообще омлет с овощами чем-то похож на всем известную итальянскую фриттату.
                                Туда любят добавлять картофель, а мы его заменим на менее калорийный продукт цукини. Тем
                                более, его сезон сейчас в самом разгаре. Блюдо получается сытным и легким одновременно,
                                готовится очень просто, так что справится даже начинающий кулинар.
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
                                    <li>Яйцо куриное - 4 шт.</li>
                                    <li>Цукини - 230 г.</li>
                                    <li>Помидор - 320 г.</li>
                                    <li>Молоко - 40 мл. </li>
                                    <li>Зелень - по вкусу</li>
                                    <li>Чеснок - по вкусу</li>
                                    <li>Масло растительное - 1 ст. л.</li>
                                    <li>Соль - по вкусу</li>
                                    <li>Перец черный - по вкусу</li>
                                </ul>
                            </div>
                            <div class="ingredients__other">
                                <ul>
                                    <li>25, мин</li>
                                    <li>2</li>
                                    <li>85 кк (на 100 мл)</li>
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
                                Приготовить все ингредиенты для омлета с помидорами и цукини. Сыр можно брать любой. Как
                                вариант, соберите завалявшиеся кусочки и натрите все для омлета. Масло растительное
                                можно заменить оливковым или топленым. Зелень я всегда беру разную, оглядываясь на ее
                                наличие дома. Классика жанра - это зеленый лук, укроп и петрушка. В этот раз нашлось
                                дома всего понемногу.

                                <br> <br>Перед тем, как заняться яйцами, я их все время хорошенько промываю под
                                проточной водой. Можно много спорить, нужно ли это делать. Тут и небольшая, но
                                вероятность подхватить сальмонеллёз, да и не знаю я, через сколько рук они прошли до
                                того, как попали ко мне, поэтому лучше промою. Яйца L размера, примерно по 64-67 грамм
                                каждое.
                            </div>
                            <div class="step__figure">Шаг 2</div>
                            <div class="step__discription">
                                Цукини промыть, срезать хвостики, а также темные пятна или повреждения на шкурке, если
                                таковые есть. В общем и целом, шкурку срезать не надо, у молодого цукини она нежная, так
                                же как и семена, которые тоже не надо выбирать. Снимать ли кожицу с помидоров - выбор за
                                вами. Я ее в омлете совершенно не чувствую. Цукини нарезать не мелким кубиком, а помидор
                                кружочками шириной около половины сантиметра.
                            </div>
                            <div class="step__figure">Шаг 3</div>
                            <div class="step__discription">
                                Зелень промыть, просушить бумажным полотенцем и мелко нарезать. Чеснок очистить и либо
                                мелко нашинковать ножом, либо пропустить через специальный пресс. Сыр натереть на терке.
                            </div>
                            <div class="step__figure">Шаг 4</div>
                            <div class="step__discription">
                                Начать обжарку. Сковороду нагреть, влить столовую ложку растительного масла и закинуть
                                кубики цукини. Обжаривать несколько минут до легкой румяности, в конце добавив
                                измельченный зубчик чеснока.

                                <br> <br>А пока идет обжарка, самое время заняться самим омлетом. Только не забывайте
                                иногда помешивать цукини, чтобы не пригорел.
                            </div>
                            <div class="step__figure">Шаг 5</div>
                            <div class="step__discription">
                                Взять миску и вбить туда яйца. Туда же добавить молоко, всыпать соль и черный перец
                                (либо смесь перцев). Иногда вместо молока добавляю пару столовых ложек нежирной сметаны.
                            </div>
                            <div class="step__figure">Шаг 6</div>
                            <div class="step__discription">
                                С помощью венчика или обычной вилки все перемешать до однородности. Ничего взбивать ни
                                до какой пены не надо, просто перемешать, чтобы растворилась соль, и все компоненты
                                соединились.
                            </div>
                            <div class="step__figure">Шаг 7</div>
                            <div class="step__discription">
                                В сковороду к цукини влить яичную смесь, аккуратно распределяя ее по всей поверхности.
                            </div>
                            <div class="step__figure">Шаг 8</div>
                            <div class="step__discription">
                                По верху равномерно выложить кружочки нарезанных помидоров. После этого сковороду плотно
                                закрыть крышкой, убавить огонь и тушить все минут 6-7 на маленьком огне. Если у вас
                                стеклянная крышка, то уже минут через пять можно глянуть через нее на поверхность
                                омлета. Чуть пошатайте сковороду, если поверхность еще "живая", то пусть готовится еще
                                пару минут.

                                <br> <br>В процессе приготовления крышку не открывать, поскольку выпустите
                                образовавшийся пар-жар, который и доводит до готовности поверхность омлета с цукини и
                                помидорами.
                            </div>
                            <div class="step__figure">Шаг 9</div>
                            <div class="step__discription">
                                Когда уже видно, что яйца сверху прихватились, добавить тертый сыр, опять же закрыть
                                крышкой и через секунд 30 выключить огонь. Подождать примерно одну - две минуты, пока
                                расплавится весь сыр.
                            </div>
                            <div class="step__figure">Шаг 10</div>
                            <div class="step__discription">
                                Останется только присыпать все измельченной зеленью и подавать. Наш омлет с цукини и
                                помидором готов. Приятного всем аппетита!
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