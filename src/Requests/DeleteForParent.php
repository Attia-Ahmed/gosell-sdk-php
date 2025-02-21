<?php

namespace TapPayments\Requests;

/**
 * Trait for Retrieveable resources. Adds a `Retrieve()` static method to the class.
 *
 * This trait should only be applied to classes that derive from GoSellObjects.
 */
trait DeleteForParent
{
	public static function delete($parent_id, $id = null, $options = null)
    {
        self::_validateKey();
        self::_validateQueryString($parent_id);
        self::_validateQueryString($id);
        $url = static::baseUrl().static::classUrl().'/'.$parent_id.'/'.$id;

        $response = static::_staticRequest('DELETE', $url, null, $options);

        return $response;
    }
}