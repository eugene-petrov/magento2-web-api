[![M2 Coding Standard](https://github.com/eugene-petrov/magento2-web-api/actions/workflows/coding-standard.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-web-api/actions/workflows/coding-standard.yml)
[![M2 Mess Detector](https://github.com/eugene-petrov/magento2-web-api/actions/workflows/mess-detector.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-web-api/actions/workflows/mess-detector.yml)
[![M2 PHPStan](https://github.com/eugene-petrov/magento2-web-api/actions/workflows/phpstan.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-web-api/actions/workflows/phpstan.yml)

***Snippet_WebApi***

_Description:_ this extension creates a table,
contains examples of CRUD operations via web-api calls.

To enable this module execute:
- `- php bin/magento --clear-static-content module:enable Snippet_WebApi`
- `- php bin/magento setup:upgrade`

There is the PhpStormHttpClient folder for test purposes. To know how to use it visit the documentation:
[PhpStorm http-client](https://www.jetbrains.com/help/phpstorm/http-client-in-product-code-editor.html#viewingResponse)