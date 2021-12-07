<?php

namespace Fruitcake\CustomImageUrl\Plugin;

use Fruitcake\CustomImageUrl\Helper\Data;
use Magento\Catalog\Model\View\Asset\Image;

class AssetImagePlugin
{
    /** @var Data $helper */
    private $helper;

    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }

    /**
     * Change the custom URL
     *
     * @return bool
     */
    public function afterGetUrl(Image $subject, $result)
    {
        return $this->helper->replaceImageUrlWithCustom($subject, $result);
    }
}
