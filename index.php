<?php
require_once 'vendor/autoload.php';

$smarty = new Smarty();
$smarty->setTemplateDir('./tpl/');
$smarty->display('index.tpl');
