<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Fruitcake\CustomImageUrl\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Config for catalog media
 */
class CustomConfig
{
    public const XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_TYPE = 'web/url/catalog_media_url_format_custom_type';
    public const XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_PATTERN = 'web/url/catalog_media_url_format_custom_pattern';
    public const XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_HOST = 'web/url/catalog_media_url_format_custom_imgproxy_host';
    public const XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_RESIZE = 'web/url/catalog_media_url_format_custom_imgproxy_resize';

    public const XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_KEY = 'web/url/catalog_media_url_format_custom_imgproxy_key';
    public const XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_SALT = 'web/url/catalog_media_url_format_custom_imgproxy_salt';

    public const XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_SOURCE_TYPE = 'web/url/catalog_media_url_format_custom_imgproxy_source_type';
    public const XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_SOURCE_PREFIX = 'web/url/catalog_media_url_format_custom_imgproxy_source_prefix';

    public const TYPE_DEFAULT = 'default';
    public const TYPE_PATTERN = 'pattern';
    public const TYPE_IMGPROXY = 'imgproxy';

    public const IMGPROXY_URL = 'url';
    public const IMGPROXY_LOCAL = 'local';
    public const IMGPROXY_S3 = 's3';

    public const IMGPROXY_FIT = 'fit';
    public const IMGPROXY_FILL = 'fill';
    public const IMGPROXY_AUTO = 'auto';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Get the custom types
     *
     * @param null|int $storeId
     * @return string
     */
    public function getCustomType($storeId = null): string
    {
        $value = $this->scopeConfig->getValue(
            self::XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_TYPE,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );

        if ($value === null) {
            return self::TYPE_DEFAULT;
        }

        return (string)$value;
    }

    public function getImgproxyHost($storeId = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_HOST,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function getImgproxyResize($storeId = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_RESIZE,
            ScopeInterface::SCOPE_STORE,
            $storeId
        ) ?: '';
    }

    public function getImgproxySourceType($storeId = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_SOURCE_TYPE,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function getImgproxySourcePrefix($storeId = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_SOURCE_PREFIX,
            ScopeInterface::SCOPE_STORE,
            $storeId
        ) ?: '';
    }


    public function getImgproxyKey($storeId = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_KEY,
            ScopeInterface::SCOPE_STORE,
            $storeId
        ) ?: '';
    }

    public function getImgproxySalt($storeId = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_IMGPROXY_SALT,
            ScopeInterface::SCOPE_STORE,
            $storeId
        ) ?: '';
    }

    public function getCustomPattern($storeId = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CATALOG_MEDIA_URL_FORMAT_CUSTOM_PATTERN,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

}
