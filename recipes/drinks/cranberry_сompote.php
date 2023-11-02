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
        ?><?php include '../../style/recipe_style.css'
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
                        <div class="recipe__img"><img src="../../pictures/компот_брусника.jpg" alt="компот_брусника">
                        </div>
                        <div class="discription">
                            <h1>Компот из брусники</h1>
                            <p>Брусника содержит в себе множество полезных веществ, витаминов, антиоксидантов, имеет
                                жиросжигающие
                                свойства, а также улучшает пищеварение. А еще такой компот очень вкусный и прекрасно
                                утоляет жажду.
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
                                    <li>Брусника - 300 г.</li>
                                    <li>Вода - 2 л.</li>
                                    <li>Сахар - 6 ч. л. </li>
                                    <li>Корица - 0,5 ч. л. </li>
                                    <li>Мандарин - 1 шт. </li>
                                </ul>
                            </div>
                            <div class="ingredients__other">
                                <ul>
                                    <li>15, мин</li>
                                    <li>4</li>
                                    <li>16 кк (на 100 мл)</li>
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
                                Чтобы получился необычный вкусный брусничный компот, возьмем 300 г ягоды, немного корицы
                                (можно молотой, я использую палочки корицы) и мандарин целиком. Мандарин можно заменить
                                и апельсином. Цитрусовые вместе с корицей придадут компоту из брусники такую теплоту и
                                нотку праздника! Этот компот из брусники пьют как горячим, так и в теплом виде.
                            </div>
                            <div class="step__figure">Шаг 2</div>
                            <div class="step__discription">
                                Ягоды брусники нужно обязательно перебрать, удалить листочки. Они тоже очень полезны, их
                                можно высушить и заваривать не только как лечебный, но и как тонизирующий, придающий
                                силы чай.

                                <br><br>Также в наш брусничный компот пойдет цедра мандарина и сама мякоть мандарина. Белая
                                часть цедры все-таки немного горчит. Сахар добавляем по вкусу и по степени зрелости ягод
                                и фруктов.
                            </div>
                            <div class="step__figure">Шаг 3</div>
                            <div class="step__discription">
                                Компот отличается по технологии от приготовления морса. Но многие, считая, что варят
                                морс, все-таки варят компот. Морс немного сложнее, там больше этапов. Там мы сначала
                                перетираем ягоды, сохраняем в холодном месте этот ягодный сок, потом развариваем мезгу,
                                остужаем и соединяем сок и отвар.

                                <br><br>Для чего я это все рассказываю, чтобы вы оценили прелесть и простоту приготовления
                                именно компота. Вот тут как раз все очень и очень просто. Но есть тоже два варианта.

                                <br><br>Можно сначала вскипятить воду с сахаром, то есть приготовить сахарный сироп и потом
                                уже опустить в нее ягоды и нарезанные фрукты. Либо, что совсем просто, сразу в сотейник
                                сложить ягоды, мандарин, корицу, сахар, залить все чистой водой и поставить на плиту.
                                Довести смесь до кипения, буквально пару минут дать покипеть, чтобы ягоды стали лопаться
                                и отдавать свой полезнейший сок.
                            </div>
                            <div class="step__figure">Шаг 4</div>
                            <div class="step__discription">
                                Снять сотейник с плиты. Вынуть из горячего компота корицу и мандарин. А оставшиеся в
                                компоте ягоды брусники растолочь прямо в воде деревянной толкушкой и оставить
                                настаиваться брусничный компот под приоткрытой крышкой.

                                <br><br>Можно, как я уже говорила, подавать его и горячим, и теплым. Его можно залить
                                горячим в термос и взять с собой на прогулку в яркий осенний лес или согреться таким
                                компотом зимой на лыжной прогулке.
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