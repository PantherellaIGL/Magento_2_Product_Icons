<?php

namespace TPB\ProductIcons\Attributes;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class Construction
{
    /** @var string */
    const ATTR_CODE        = 'construction';
    /** @var string */
    const ATTR_LABEL       = 'Construction';
    /** @var string */
    const ATTR_GROUP_NAME  = 'Product Icons';
    /** @var string */
    const ATTR_CONFIG_CODE = 'displayconstruction';

    /**
     * @return array
     */
    public static function getAttributeOptions() :array
    {
        $options = [
            'value' => [
                'option_0' => [
                    0 => '11x1 Rib',
                    1 => '11x1 Rib',
                ],
                'option_1' => [
                    0 => '14x2 Rib',
                    1 => '14x2 Rib',
                ],
                'option_2' => [
                    0 => '19x1 Rib',
                    1 => '19x1 Rib',
                ],
                'option_3' => [
                    0 => '1x1 Rib',
                    1 => '1x1 Rib',
                ],
                'option_4' => [
                    0 => '20X2 Rib',
                    1 => '20X2 Rib',
                ],
                'option_5' => [
                    0 => '2x2 Rib',
                    1 => '2x2 Rib',
                ],
                'option_6' => [
                    0 => '5x1 Rib',
                    1 => '5x1 Rib',
                ],
                'option_7' => [
                    0 => '5x3 Rib',
                    1 => '5x3 Rib',
                ],
                'option_8' => [
                    0 => '7x1 Rib',
                    1 => '7x1 Rib',
                ],
                'option_9' => [
                    0 => '8x2 Rib',
                    1 => '8x2 Rib',
                ],
                'option_10' => [
                    0 => '8x3 Rib',
                    1 => '8x3 Rib',
                ],
                'option_11' => [
                    0 => '9x1 Rib',
                    1 => '9x1 Rib',
                ],
                'option_12' => [
                    0 => 'Comfort Top',
                    1 => 'Comfort Top',
                ],
                'option_13' => [
                    0 => 'Flat Knit',
                    1 => 'Flat Knit',
                ],
                'option_14' => [
                    0 => 'Herringbone Rib',
                    1 => 'Herringbone Rib',
                ],
                'option_15' => [
                    0 => 'Shadow Rib',
                    1 => 'Shadow Rib',
                ],
                'option_16' => [
                    0 => 'Textured Pattern',
                    1 => 'Textured Pattern',
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
            case '11x1 Rib':
                return '11x1.png';
                break;
            case '14x2 Rib':
                return '14x2.png';
                break;
            case '19x1 Rib':
                return '19x1.png';
                break;
            case '1x1 Rib':
                return '1x1.png';
                break;
            case '20X2 Rib':
                return '20x2.png';
                break;
            case '2x2 Rib':
                return '2x2.png';
                break;
            case '5x1 Rib':
                return '5x1.png';
                break;
            case '5x3 Rib':
                return '5x3.png';
                break;
            case '7x1 Rib':
                return '7x1.png';
                break;
            case '8x2 Rib':
                return '8x2.png';
                break;
            case '8x3 Rib':
                return '8x3.png';
                break;
            case '9x1 Rib':
                return '9x1.png';
                break;
            case 'Comfort Top':
                return 'comfort_top.png';
                break;
            case 'Flat Knit':
                return 'flat_knit.png';
                break;
            case 'Herringbone Rib':
                return 'herringbone_rib.png';
                break;
            case 'Shadow Rib':
                return 'shadow_rib.png';
                break;
            case 'Textured Pattern':
                return 'textured_pattern';
                break;

            default:
                return '';
        }
    }
}