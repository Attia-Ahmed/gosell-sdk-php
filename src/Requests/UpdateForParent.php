<?php

namespace TapPayments\Requests;

/**
 * Trait for updateable resources. Adds a `update()` static method to the class.
 *
 * This trait should only be applied to classes that derive from GoSellObjects.
 */
trait UpdateForParent
{
    
    public static function update($parent_id, $id = null, $params = null, $options = null)
    {
        self::_validateKey();
        self::_validateParams('PUT',$params);
        self::_validateQueryString($parent_id);
        self::_validateQueryString($id);
        $url = static::baseUrl().static::classUrl().'/'.$parent_id.'/'.$id;

        $response = static::_staticRequest('PUT', $url, $params, $options);

        return $response;
    }

}