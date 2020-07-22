<?php 

namespace O46theme\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutCategoryItemVueTemplateContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('O46theme::ItemList.Components.CategoryItem');
    }
}