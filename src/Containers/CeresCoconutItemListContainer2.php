<?php

namespace O46-Theme\Containers;

use Plenty\Plugin\Templates\Twig;

class O46-ThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('O46-Theme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}