<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GetDeal implements JsonSerializable
{
    /**
     * If the response is successful or not
     * @var bool|null $success public property
     */
    public $success;

    /**
     * @todo Write general description for this property
     * @var \Pipedrive\Models\Data21|null $data public property
     */
    public $data;

    /**
     * @todo Write general description for this property
     * @maps additional_data
     * @var \Pipedrive\Models\AdditionalData3|null $additionalData public property
     */
    public $additionalData;

    /**
     * @todo Write general description for this property
     * @maps related_objects
     * @var \Pipedrive\Models\RelatedObjects|null $relatedObjects public property
     */
    public $relatedObjects;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool            $success        Initialization value for $this->success
     * @param Data21          $data           Initialization value for $this->data
     * @param AdditionalData3 $additionalData Initialization value for $this->additionalData
     * @param RelatedObjects  $relatedObjects Initialization value for $this->relatedObjects
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->success        = func_get_arg(0);
            $this->data           = func_get_arg(1);
            $this->additionalData = func_get_arg(2);
            $this->relatedObjects = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['success']         = $this->success;
        $json['data']            = $this->data;
        $json['additional_data'] = $this->additionalData;
        $json['related_objects'] = $this->relatedObjects;

        return $json;
    }
}