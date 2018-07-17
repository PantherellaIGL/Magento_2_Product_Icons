<?php

namespace TPB\ProductIcons\Attributes;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class Length
{
    /** @var string */
    const ATTR_CODE        = 'length';
    /** @var string */
    const ATTR_LABEL       = 'Length';
    /** @var string */
    const ATTR_GROUP_NAME  = 'Product Icons';
    /** @var string */
    const ATTR_CONFIG_CODE = 'displaylength';

    /**
     * @return array
     */
    public static function getAttributeOptions() :array
    {
        $options = [
            'value' => [
                'option_0' => [
                    0 => 'Standard/Long Anklet (m)',
                    1 => 'Standard/Long Anklet',
                ],
                'option_1' => [
                    0 => 'Long/Over the calf (m)',
                    1 => 'Long/Over the calf',
                ],
                'option_2' => [
                    0 => 'No-Show Socks (m)',
                    1 => 'No-Show Socks',
                ],
                'option_3' => [
                    0 => 'Short/Anklet (w)',
                    1 => 'Short/Anklet',
                ],
                'option_4' => [
                    0 => 'Knee-High (w)',
                    1 => 'Knee-High',
                ],
                'option_5' => [
                    0 => 'Invisible Socks (w)',
                    1 => 'No-Show Socks (Women\'s)',
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
            case 'Standard/Long Anklet':
                return 'standard_long_anklet.png';
                break;
            case 'Long/Over the calf':
                return 'long_over_calf.png';
                break;
            case 'No-Show Socks':
                return 'no_show.png';
                break;
            case 'Short/Anklet':
                return 'short_anklet.png';
                break;
            case 'Knee-High':
                return 'knee_high.png';
                break;
            case 'No-Show Socks (Women\'s)':
                return 'invisible.png';
                break;

            default:
                return '';
        }
    }
}