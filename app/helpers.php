<?php
if (!function_exists('getCategoriesMenu')) {
    function getCategoriesMenu(): \Aimeos\Map
    {
        $catalogManager = \Aimeos\MShop::create(app('aimeos.context')->get(), 'catalog');
        $items = $catalogManager->search($catalogManager->filter());
        return $items;
    }
}
if (!function_exists('getSalePrice')) {
    function getSalePrice($regular, $rebate)
    {
        if ($rebate > $regular) {
            return $regular;
        } else
            return $regular - $rebate;
    }
}
if (!function_exists('getPriceHtml')) {
    function getPriceHtml($regular, $rebate): string
    {
        $salePrice = getSalePrice($regular, $rebate);
        if($salePrice == $regular)
        {
            return '<p> '.$regular.'$</p>';
        }
        else
        return '<p style="display: flex; align-item: center"><strike style="line-height: 34px">'.$regular.'</strike></p><p>  '.$salePrice.'</p>';
    }
}
