<?php

require Message.php;
        $message = newMessage();
        $message -> setText('Hallo')
                 -> setSender('Ancuta')
                 -> setRecipient('Ionel')
                 -> setData('16.06.2014');
             
var_dump($message);

echo $message -> getText();
echo $message -> getSender();
echo $message -> getRecipient();
echo $message -> getData();

