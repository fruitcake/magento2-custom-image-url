<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Fruitcake\CustomImageUrl\Model\Config\Source;

use  Fruitcake\CustomImageUrl\Model\Config\CustomConfig;

/**
 * Option provider for custom media URL type
 */
class CustomUrlType implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * Get a list of supported catalog media URL formats.
     *
     * @codeCoverageIgnore
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => CustomConfig::TYPE_DEFAULT,
                'label' => __('Default Magento Catalog media URL format')
            ],
            [
                'value' => CustomConfig::TYPE_PATTERN,
                'label' => __('Custom URL pattern')
            ],
            [
                'value' => CustomConfig::TYPE_IMGPROXY,
                'label' => __('Imgproxy')
            ],
        ];
    }
}
