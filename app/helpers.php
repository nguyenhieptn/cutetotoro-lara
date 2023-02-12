<?php
if (!function_exists('getCategoriesMenu')) {
    function getCategoriesMenu(): \Aimeos\Map
    {
        $catalogManager = \Aimeos\MShop::create(app('aimeos.context')->get(), 'catalog');
        $items = $catalogManager->search($catalogManager->filter());
        return $items;

    }

}
