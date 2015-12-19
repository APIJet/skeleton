<?php 

namespace Helpers;

class Arr
{
    /**
     * @desc extract multiple paths form an array in case of missing path it's set default value.
     * @param array $from
     * @param array $needItems
     * @param string $default
     * @return array
     */
    public static function extract(array $from, array $needItems, $default = null)
    {
        $foundItem = [];
        foreach($needItems as $needItem) {
            $foundItem[$needItem] = isset($from[$needItem]) ? $from[$needItem] : $default;
        }
        
        return $foundItem;
    }
}