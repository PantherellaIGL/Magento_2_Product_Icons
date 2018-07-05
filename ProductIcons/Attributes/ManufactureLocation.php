<?php

namespace TPB\ProductIcons\Attributes;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class ManufactureLocation
{
    /** @var string */
    const ATTR_CODE        = 'manufacture_location';
    /** @var string */
    const ATTR_LABEL       = 'Country Of Manufacture';
    /** @var string */
    const ATTR_GROUP_NAME  = 'Product Icons';
    /** @var string */
    const ATTR_CONFIG_CODE = 'displaymanufacturelocation';

    /**
     * @return array
     */
    public static function getAttributeOptions() :array
    {
        $options = [
            'value' => [
                'option_0' => [
                    0 => 'United Kingdom',
                    1 => 'Made In UK',
                ],
            ],
        ];

        return $options;
    }

    /**
     * @return array
     */
    public static function getAttributeInstallConfig() :array
    {
        $config = [
            'group'                   => self::ATTR_GROUP_NAME,
            'type'                    => 'int',
            'backend'                 => '',
            'frontend'                => '',
            'label'                   => self::ATTR_LABEL,
            'input'                   => 'select',
            'class'                   => '',
            'global'                  => ScopedAttributeInterface::SCOPE_STORE,
            'visible'                 => true,
            'required'                => false,
            'user_defined'            => true,
            'default'                 => '0',
            'searchable'              => true,
            'filterable'              => true,
            'comparable'              => false,
            'visible_on_front'        => true,
            'used_in_product_listing' => true,
            'unique'                  => false,
            'is_used_in_grid'         => true,
            'is_visible_in_grid'      => true,
            'is_filterable_in_grid'   => true,
            'option'                  => self::getAttributeOptions(),
        ];

        return $config;
    }

    /**
     * @param string $data
     *
     * @return string
     */
    public static function getIconFileNameByAttributeLabel(string $data) :string
    {
        switch ($data) {
            case 'Made In UK':
                return 'uk.png';
                break;

            default:
                return '';
        }
    }
}