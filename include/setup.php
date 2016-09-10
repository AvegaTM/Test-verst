<?php

// загружаем библиотеку Smarty
//require('Smarty.class.php');
define( 'SMARTY_DIR', '/home/avg/workspace/Test-verst/include/libs/' );
require_once( SMARTY_DIR . 'Smarty.class.php' );

// Файл setup.php - это хорошее место для
// подключения библиотечных файлов вашего приложения,
// вы можете сделать это прямо здесь. Пример:
// require('guestbook/guestbook.lib.php');

class Smarty_Setup extends Smarty {

   function Smarty_Setup()
   {
        // Конструктор класса.
        // Он автоматически вызывается при создании нового экземпляра.

        $this->Smarty();

        $this->template_dir = '/home/avg/workspace/Test-verst/templates';
        $this->compile_dir  = '/home/avg/workspace/Test-verst/templates_c';
        $this->config_dir   = '/home/avg/workspace/Test-verst/configs';
        $this->cache_dir    = '/home/avg/workspace/Test-verst/cache';

        $this->caching = true;
        $this->assign('app_name', 'Guest Book');
   }

}
?>