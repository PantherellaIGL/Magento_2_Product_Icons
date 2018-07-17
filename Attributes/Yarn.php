<?php

namespace TPB\ProductIcons\Attributes;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class Yarn
{
    /** @var string */
    const ATTR_CODE        = 'yarn';
    /** @var string */
    const ATTR_LABEL       = 'Yarn';
    /** @var string */
    const ATTR_GROUP_NAME  = 'Product Icons';
    /** @var string */
    const ATTR_CONFIG_CODE = 'displayyarn';

    /**
     * @return array
     */
    public static function getAttributeOptions() :array
    {
        $options = [
            'value' => [
                'option_0' => [
                    0 => 'Fil d\'Ecosse / Cotton Lisle',
                    1 => 'Fil d\'Ecosse / Cotton Lisle',
                ],
                'option_1' => [
                    0 => 'Sea Island Cotton',
                    1 => 'Sea Island Cotton',
                ],
                'option_2' => [
                    0 => 'Egyptian Cotton',
                    1 => 'Egyptian Cotton',
                ],
                'option_3' => [
                    0 => 'Cotton/Linen Blend',
                    1 => 'Cotton/Linen Blend',
                ],
                'option_4' => [
                    0 => 'Compact Spun Cotton',
                    1 => 'Compact Spun Cotton',
                ],
                'option_5' => [
                    0 => 'Merino Wool',
                    1 => 'Merino Wool',
                ],
                'option_6' => [
                    0 => 'Escorial Wool',
                    1 => 'Escorial Wool',
                ],
                'option_7' => [
                    0 => 'Cashmere',
                    1 => 'Cashmere',
                ],
                'option_8' => [
                    0 => 'Silk',
                    1 => 'Silk',
                ],
                'option_9' => [
                    0 => 'Cotton',
                    1 => 'Cotton',
                ],
                'option_10' => [
                    0 => 'Wool',
                    1 => 'Wool',
                ],
                'option_11' => [
                    0 => 'Lurex',
                    1 => 'Lurex',
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
            case 'Fil d\'Ecosse / Cotton Lisle':
                return 'fil_d_ecosse_cotton_lisle.png';
                break;
            case 'Sea Island Cotton':
                return 'sea_island_cotton.png';
                break;
            case 'Egyptian Cotton':
                return 'egyptian_cotton.png';
                break;
            case 'Cotton/Linen Blend':
                return 'cotton_linen_blend.png';
                break;
            case 'Compact Spun Cotton':
                return 'cotton_linen_blend.png';
                break;
            case 'Merino Wool':
                return 'merino_wool.png';
                break;
            case 'Escorial Wool':
                return 'escorial_wool.png';
                break;
            case 'Cashmere':
                return 'cashmere.png';
                break;
            case 'Silk':
                return 'silk.png';
                break;
            case 'Cotton':
                return 'cotton_linen_blend.png';
                break;
            case 'Wool':
                return 'merino_wool.png';
                break;
            case 'Lurex':
                return 'lurex.png';
                break;

            default:
                return '';
        }
    }
}