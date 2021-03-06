<?php
namespace tigrov\kendoui\helpers;


class Kendo {

    /**
     * Convert list with keys to Kendo UI values list
     *
     * @param $list [key => value]
     * @return string JSON list of values ["text": value, "value": key]
     */
    public static function toValues($list) {
        $names = array();
        foreach ($list as $k => $v) {
            $names[] = array('text' => $v, 'value' => $k);
        }

        return json_encode($names);
    }

    /**
     * @return string JSON list of values [{"text": "No", "value": 0}, {"text": "Yes", "value": 1}]
     */
    public static function boolValues()
    {
        return static::toValues([
            0 => 'No',
            1 => 'Yes',
        ]);
    }
} 