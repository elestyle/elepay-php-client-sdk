# Swagger\Client\RefundApi

All URIs are relative to *https://api.elepay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefund**](RefundApi.md#createRefund) | **POST** /charges/{id}/refunds | Create refund
[**listChargesRefunds**](RefundApi.md#listChargesRefunds) | **GET** /charges/{id}/refunds | List refunds
[**listRefunds**](RefundApi.md#listRefunds) | **GET** /refunds | List refunds
[**retrieveChargeRefund**](RefundApi.md#retrieveChargeRefund) | **GET** /charges/{id}/refunds/{refundId} | Retrieve refund
[**retrieveRefund**](RefundApi.md#retrieveRefund) | **GET** /refunds/{refundId} | Retrieve refund


# **createRefund**
> \Swagger\Client\jp.elestyle.elepay.model\RefundDto createRefund($id, $refund)

Create refund

決済の全額あるいは一部を返金を行います。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Charge ID
$refund = new \Swagger\Client\jp.elestyle.elepay.model\RefundReq(); // \Swagger\Client\jp.elestyle.elepay.model\RefundReq | 返金の詳細情報

try {
    $result = $apiInstance->createRefund($id, $refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |
 **refund** | [**\Swagger\Client\jp.elestyle.elepay.model\RefundReq**](../Model/RefundReq.md)| 返金の詳細情報 |

### Return type

[**\Swagger\Client\jp.elestyle.elepay.model\RefundDto**](../Model/RefundDto.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listChargesRefunds**
> \Swagger\Client\jp.elestyle.elepay.model\RefundsResponse listChargesRefunds($id)

List refunds

返金情報リストを取得します。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Charge ID

try {
    $result = $apiInstance->listChargesRefunds($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->listChargesRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |

### Return type

[**\Swagger\Client\jp.elestyle.elepay.model\RefundsResponse**](../Model/RefundsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRefunds**
> \Swagger\Client\jp.elestyle.elepay.model\RefundsResponse listRefunds($charge_id)

List refunds

決済の返金詳細情報リストを取得します。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | Charge ID

try {
    $result = $apiInstance->listRefunds($charge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->listRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| Charge ID |

### Return type

[**\Swagger\Client\jp.elestyle.elepay.model\RefundsResponse**](../Model/RefundsResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveChargeRefund**
> \Swagger\Client\jp.elestyle.elepay.model\RefundDto retrieveChargeRefund($id, $refund_id)

Retrieve refund

返金詳細情報を取得します。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Charge ID
$refund_id = "refund_id_example"; // string | Refund ID

try {
    $result = $apiInstance->retrieveChargeRefund($id, $refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->retrieveChargeRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |
 **refund_id** | **string**| Refund ID |

### Return type

[**\Swagger\Client\jp.elestyle.elepay.model\RefundDto**](../Model/RefundDto.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRefund**
> \Swagger\Client\jp.elestyle.elepay.model\RefundDto retrieveRefund($refund_id)

Retrieve refund

返金の詳細情報を取得します。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_id = "refund_id_example"; // string | Refund ID

try {
    $result = $apiInstance->retrieveRefund($refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->retrieveRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| Refund ID |

### Return type

[**\Swagger\Client\jp.elestyle.elepay.model\RefundDto**](../Model/RefundDto.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

