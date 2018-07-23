<?php
/**
 * Created by PhpStorm.
 * User: kyerematics
 * Date: 7/22/18
 * Time: 6:12 PM
 */

namespace myRoommie\Repository;


class Helper
{

    /**
     * Replace keys of given array by values of $keys
     * $keys format is [$oldKey=>$newKey]
     *
     * With $filter==true, will remove elements with key not in $keys
     *
     * @param  array   $array
     * @param  array   $keys
     * @param  boolean $filter
     *
     * @return $array
     */
    function array_replace_keys(array $array,array $keys,$filter=false)
    {
        $newArray=[];
        foreach($array as $key=>$value)
        {
            if(isset($keys[$key]))
            {
                $newArray[$keys[$key]]=$value;
            }
            elseif(!$filter)
            {
                $newArray[$key]=$value;
            }
        }

        return $newArray;
    }
}
