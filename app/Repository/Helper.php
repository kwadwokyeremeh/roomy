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
     * The user's gender attributes.
     *
     * @var array
     */
    public $gender;

    public function __construct()
    {

       }

    /**
     * Get the gender for the user.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
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

    //$arr => original array
//$set => array containing old keys as keys and new keys as values
    function recursive_change_key($arr, $set) {
        if (is_array($arr) && is_array($set)) {
            $newArr = array();
            foreach ($arr as $k => $v) {
                $key = array_key_exists( $k, $set) ? $set[$k] : $k;
                $newArr[$key] = is_array($v) ? recursive_change_key($v, $set) : $v;
            }
            return $newArr;
        }
        return $arr;
    }

    /**
     * Get all values from specific key in a multidimensional array
     *
     * @param $key string
     * @param $arr array
     * @return null|string|array
     */
    function array_value_recursive($key, array $arr){
        $val = array();
        array_walk_recursive($arr, function($v, $k) use($key, &$val){
            if($k == $key) array_push($val, $v);
        });
        return count($val) > 1 ? $val : array_pop($val);
    }


    function replaceKey($subject, $newKey, $oldKey) {

        // if the value is not an array, then you have reached the deepest
        // point of the branch, so return the value
        if (!is_array($subject)) return $subject;

        $newArray = array(); // empty array to hold copy of subject
        foreach ($subject as $key => $value) {

            // replace the key with the new key only if it is the old key
            $key = ($key === $oldKey) ? $newKey : $key;

            // add the value with the recursive call
            $newArray[$key] = replaceKey($value, $newKey, $oldKey);
        }
        return $newArray;
    }

}
