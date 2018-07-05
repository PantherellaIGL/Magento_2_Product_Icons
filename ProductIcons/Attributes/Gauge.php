<?php

namespace TPB\ProductIcons\Attributes;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class Gauge
{
    /** @var string */
    const ATTR_CODE        = 'gauge';
    /** @var string */
    const ATTR_LABEL       = 'Gauge';
    /** @var string */
    const ATTR_GROUP_NAME  = 'Product Icons';
    /** @var string */
    const ATTR_CONFIG_CODE = 'displaygauge';

    /**
     * @return array
     */
    public static function getAttributeOptions() :array
    {
        $options = [
            'value' => [
                'option_0' => [
                    0 => '240',
                    1 => 'Superfine Gauge (240-stitch)',
                ],
                'option_1' => [
                    0 => '200',
                    1 => 'Fine Gauge (200-stitch)',
                ],
                'option_2' => [
                    0 => '176',
                    1 => 'Fine Gauge (176-stitch)',
                ],
                'option_3' => [
                    0 => '96',
                    1 => 'Leisure Knit (96-stitch)',
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
            case 'Superfine Gauge (240-stitch)':
                return '240.png';
                break;
            case 'Fine Gauge (200-stitch)':
                return '200.png';
                break;
            case 'Fine Gauge (176-stitch)':
                return '176.png';
                break;
            case 'Leisure Knit (96-stitch)':
                return '96.png';
                break;

            default:
                return '';
        }
    }
}