<?php

require Database.php;
        $database = newDatabase();
        $database -> setAdress('localhost')
                  -> setUsername('root')
                  -> setPassword('')
                  -> setName('autentificare');
             
var_dump($database);

echo $database -> getAdress();
echo $database -> getUsername();
echo $database -> getPassword();
echo $database -> getName();

 