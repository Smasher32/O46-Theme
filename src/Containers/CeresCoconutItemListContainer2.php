<?php

namespace O46theme\Containers;

use Plenty\Plugin\Templates\Twig;

class O46themeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('O46theme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}