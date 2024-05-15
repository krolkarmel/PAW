<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcCompute'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('calcCompute'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user','admin']);

getRouter()->go(); //wybiera i uruchamia odpowiednią ścieżkę na podstawie parametru 'action';