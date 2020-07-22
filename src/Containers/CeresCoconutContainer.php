<?php

namespace O46theme\Containers;

use Plenty\Plugin\Templates\Twig;

class O46themeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('O46theme::Stylesheet');
    }
}