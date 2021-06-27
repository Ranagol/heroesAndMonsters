<?php

require __DIR__ .'/vendor/autoload.php';

use classes\Helper;
use classes\Logger;
use classes\exceptions\CustomException;

Logger::getInstance()->log('testing');
echo Helper::generateRandomInteger(1,100);

