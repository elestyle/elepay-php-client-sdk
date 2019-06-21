# Swagger\Client\ChargeApi

All URIs are relative to *https://api.elepay.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCharge**](ChargeApi.md#createCharge) | **POST** /charges | Create charge
[**listCharges**](ChargeApi.md#listCharges) | **GET** /charges | List charges
[**retrieveCharge**](ChargeApi.md#retrieveCharge) | **GET** /charges/{id} | Retrieve charge


# **createCharge**
> \Swagger\Client\jp.elestyle.elepay.model\ChargeDto createCharge($charge)

Create charge

支払い処理を行います。

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge** | [**\Swagger\Client\jp.elestyle.elepay.model\ChargeReq**](../Model/ChargeReq.md)| 支払い詳細情報 |

### Return type

[**\Swagger\Client\jp.elestyle.elepay.model\ChargeDto**](../Model/ChargeDto.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCharges**
> \Swagger\Client\jp.elestyle.elepay.model\ChargesResponse listCharges($payment_method, $from, $to, $date_field, $status, $limit, $offset, $sort, $order)

List charges

支払い情報リストを取得します。

### Example
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
$payment_method = array("payment_method_example"); // string[] | 支払い方法(複数支払い方法を指定することが可能です。)
$from = 789; // int | 検索対象範囲の開始時間のUTCタイムスタンプ。ここに指定したタイムスタンプ以降に作成されたデータを取得します。
$to = 789; // int | 検索対象範囲の終了時間のUTCタイムスタンプ。ここに指定したタイムスタンプ以前に作成されたデータを取得します。
$date_field = "date_field_example"; // string | 検索対象範囲の項目を指定します。
$status = "status_example"; // string | 支払い状態
$limit = 20; // int | 最大件数
$offset = 0; // int | 検索開始位置
$sort = "sort_example"; // string | ソート項目
$order = "desc"; // string | ソート順

try {
    $result = $apiInstance->listCharges($payment_method, $from, $to, $date_field, $status, $limit, $offset, $sort, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->listCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_method** | [**string[]**](../Model/string.md)| 支払い方法(複数支払い方法を指定することが可能です。) | [optional]
 **from** | **int**| 検索対象範囲の開始時間のUTCタイムスタンプ。ここに指定したタイムスタンプ以降に作成されたデータを取得します。 | [optional]
 **to** | **int**| 検索対象範囲の終了時間のUTCタイムスタンプ。ここに指定したタイムスタンプ以前に作成されたデータを取得します。 | [optional]
 **date_field** | **string**| 検索対象範囲の項目を指定します。 | [optional]
 **status** | **string**| 支払い状態 | [optional]
 **limit** | **int**| 最大件数 | [optional] [default to 20]
 **offset** | **int**| 検索開始位置 | [optional] [default to 0]
 **sort** | **string**| ソート項目 | [optional]
 **order** | **string**| ソート順 | [optional] [default to desc]

### Return type

[**\Swagger\Client\jp.elestyle.elepay.model\ChargesResponse**](../Model/ChargesResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCharge**
> \Swagger\Client\jp.elestyle.elepay.model\ChargeDto retrieveCharge($id)

Retrieve charge

支払い詳細情報を取得します。

### Example
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
$id = "id_example"; // string | Charge ID

try {
    $result = $apiInstance->retrieveCharge($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->retrieveCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID |

### Return type

[**\Swagger\Client\jp.elestyle.elepay.model\ChargeDto**](../Model/ChargeDto.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

