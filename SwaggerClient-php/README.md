# SwaggerClient-php
elepay APIはRESTをベースに構成された決済APIです。支払い処理、返金処理など、決済に関わる運用における様々なことができます。

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/elestyle/elepay-php-sdk.git"
    }
  ],
  "require": {
    "elestyle/elepay-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new Swagger\Client\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge = new \Swagger\Client\jp.elestyle.elepay.model\ChargeReq(); // \Swagger\Client\jp.elestyle.elepay.model\ChargeReq | 支払い詳細情報

try {
    $result = $apiInstance->createCharge($charge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->createCharge: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.elepay.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChargeApi* | [**createCharge**](docs/Api/ChargeApi.md#createcharge) | **POST** /charges | Create charge
*ChargeApi* | [**listCharges**](docs/Api/ChargeApi.md#listcharges) | **GET** /charges | List charges
*ChargeApi* | [**retrieveCharge**](docs/Api/ChargeApi.md#retrievecharge) | **GET** /charges/{id} | Retrieve charge
*RefundApi* | [**createRefund**](docs/Api/RefundApi.md#createrefund) | **POST** /charges/{id}/refunds | Create refund
*RefundApi* | [**listChargesRefunds**](docs/Api/RefundApi.md#listchargesrefunds) | **GET** /charges/{id}/refunds | List refunds
*RefundApi* | [**listRefunds**](docs/Api/RefundApi.md#listrefunds) | **GET** /refunds | List refunds
*RefundApi* | [**retrieveChargeRefund**](docs/Api/RefundApi.md#retrievechargerefund) | **GET** /charges/{id}/refunds/{refundId} | Retrieve refund
*RefundApi* | [**retrieveRefund**](docs/Api/RefundApi.md#retrieverefund) | **GET** /refunds/{refundId} | Retrieve refund


## Documentation For Models

 - [BadRequestError](docs/Model/BadRequestError.md)
 - [ChargeDateTimeType](docs/Model/ChargeDateTimeType.md)
 - [ChargeDto](docs/Model/ChargeDto.md)
 - [ChargeReq](docs/Model/ChargeReq.md)
 - [ChargesResponse](docs/Model/ChargesResponse.md)
 - [ElepayError](docs/Model/ElepayError.md)
 - [ElepayRestError](docs/Model/ElepayRestError.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [PaymentMethodType](docs/Model/PaymentMethodType.md)
 - [RefundDto](docs/Model/RefundDto.md)
 - [RefundExtDto](docs/Model/RefundExtDto.md)
 - [RefundReq](docs/Model/RefundReq.md)
 - [RefundsResponse](docs/Model/RefundsResponse.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication


## Author




