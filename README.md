# Magento2 Custom Image Url

Magento 2.4 has the option to set a dynamic URL (General -> Web -> Url options). This module adds an extra option to define the format of the URL.


## Install

```
composer require fruitcake/magento2-custom-image-url
php bin/magento module:enable Fruitcake_CustomImageUrl
php bin/magento setup:upgrade
```

## Configuration

You can configure the url in Web -> URLS

## Possibible options
 - Pattern; describe the URL based on width/height/path etc
 - Imgproxy; provide an Imgproxy host with URL/Local/S3 options, including signature
 
## Todo / future ideas

 - Other CDNs
 - ..
 
## License

MIT
