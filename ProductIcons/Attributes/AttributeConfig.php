<?php

namespace TPB\ProductIcons\Attributes;

class AttributeConfig
{
    /** @var array */
    const ATTR_CONFIG = [
        Yarn::ATTR_CODE                 => [
            'class'       => Yarn::class,
            'config_code' => Yarn::ATTR_CONFIG_CODE,
        ],
        Construction::ATTR_CODE         => [
            'class'       => Construction::class,
            'config_code' => Construction::ATTR_CONFIG_CODE,
        ],
        Gauge::ATTR_CODE                => [
            'class'       => Gauge::class,
            'config_code' => Gauge::ATTR_CONFIG_CODE,
        ],
        HandLinked::ATTR_CODE           => [
            'class'       => HandLinked::class,
            'config_code' => HandLinked::ATTR_CONFIG_CODE,
        ],
        Length::ATTR_CODE               => [
            'class'       => Length::class,
            'config_code' => Length::ATTR_CONFIG_CODE,
        ],
        ManufactureLocation::ATTR_CODE  => [
            'class'       => ManufactureLocation::class,
            'config_code' => ManufactureLocation::ATTR_CONFIG_CODE,
        ],
    ];

    /**
     * @return array
     */
    public static function getAttributeCodes() :array
    {
        return array_keys(self::ATTR_CONFIG);
    }

    /**
     * @return array
     */
    public static function getAttributeConfig() :array
    {
        return self::ATTR_CONFIG;
    }
}