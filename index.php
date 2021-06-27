<?php

require __DIR__ .'/vendor/autoload.php';

use classes\Helper;
use classes\Logger;
use classes\exceptions\CustomException;

Logger::getInstance()->log('testing');
echo Helper::generateRandomInteger(1,100);

try {
    $x = 10;
    if ($x < 10) {
        echo '$x = 10.';
        return;
    }
    throw new CustomException('Something is wrong');

} catch (CustomException $error) {
    echo $error->getErrorMessage();
}