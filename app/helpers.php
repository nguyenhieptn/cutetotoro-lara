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
if(!function_exists('convertAimeosProductToProduct'))
{
    function convertAimeosProductToProduct($aimeosProduct)
    {
        $detail = $aimeosProduct;
        $listItems = [];
        foreach ($detail->getRefItems('media') as $media) {
            $listItems['media'][] = $media->get('media.url');
        }

        foreach ($detail->getRefItems('catalog') as $catalog) {
            $listItems['catalog'][] = [
                'label' => $catalog->label,
                'id' => $catalog->id,
            ];
        }
        foreach ($detail->getListItems('price') as $price) {
            $price = $price->getRefItem();
            $listItems['price'][] = [
                'actual' => $price->get('price.value'),
                'sale'   => getSalePrice($price->get('price.value'), $price->get('rebate')),
                'price_html'=> getPriceHtml($price->get('price.value'), $price->get('rebate')),
            ];
        }
        $product = array_merge($detail->toArray(), $listItems);
        return $product;
    }
}
