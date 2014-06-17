<?php

require user.php;
        $user = newUser();
        $user -> setid(1)
              -> setFirstName('Ancuta')
              -> setLastName('Teuca')
              -> setCity('Cluj-Napoca')
              -> setAge('27')
              -> setUsername('ancutateuca')
              -> setPassword('parola');
        
var_dump($user);

echo $user -> getId();
echo $user -> getFirstName();
echo $user -> getLastName();
echo $user -> getCity();
echo $user -> getAge();
echo $user -> getUsername();
echo $user -> getPassword();
