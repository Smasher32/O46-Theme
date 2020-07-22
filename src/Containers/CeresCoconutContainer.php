<?php

namespace O46-Theme\Containers;

use Plenty\Plugin\Templates\Twig;

class O46-ThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('O46-Theme::Stylesheet');
    }
}