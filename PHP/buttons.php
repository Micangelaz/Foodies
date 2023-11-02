<?php

    if(isset( $_POST['subscribe']))
        {
            $email = $_POST['email'];
            $fp = fopen('Files/emails.txt', 'a+');
            fwrite($fp, $email);
            fclose($fp);            
        }


    if(isset( $_POST['feedback']))
        {
            $text_title = 'Отзыв:';
            $name_title = 'Имя:';
            $email_title = 'Email:';
            $text = $_POST['comment__feedback'];  
            $name = $_POST['name__feedback'];  
            $email = $_POST['email__feedback'];
            $fp = fopen('../../Files/feedbacks.txt', 'a+');
            fwrite($fp, $text_title . PHP_EOL);
            fwrite($fp, $text . PHP_EOL);
            fwrite($fp, $name_title . PHP_EOL);
            fwrite($fp, $name . PHP_EOL);
            fwrite($fp, $email_title . PHP_EOL);
            fwrite($fp, $email . PHP_EOL);
            fclose($fp);            
        }

        if(isset( $_POST['button__find']))
        {
            $text_title = 'Рецепт:';
            $name_title = 'Имя:';
            $email_title = 'Email:';
            $text = $_POST['comment__find'];  
            $name = $_POST['name__find'];  
            $email = $_POST['email__find'];
            $fp = fopen('Files/new_recipes.txt', 'a+');
            fwrite($fp, $text_title . PHP_EOL);
            fwrite($fp, $text . PHP_EOL);
            fwrite($fp, $name_title . PHP_EOL);
            fwrite($fp, $name . PHP_EOL);
            fwrite($fp, $email_title . PHP_EOL);
            fwrite($fp, $email . PHP_EOL);
            fclose($fp);            
        }
?>