<?php

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../app/utils/DBData.php";

$jean = new DBData();
//dump($jean);exit;


$req2 = $jean->getEachType(1);
dump($req2);

