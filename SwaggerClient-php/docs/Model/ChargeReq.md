# ChargeReq

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 支払い金額 | [optional] 
**currency** | **string** | 通貨コード (ISO_4217) | [optional] [default to 'JPY']
**payment_method** | [**\Swagger\Client\jp.elestyle.elepay.model\PaymentMethodType**](PaymentMethodType.md) |  | [optional] 
**order_no** | **string** | お客様システム側のオーダーNo、例えば注文番号、決済IDなど | [optional] 
**description** | **string** | 支払い説明文 | [optional] 
**extra** | **map[string,object]** | 支払いメタデータ | [optional] 
**metadata** | **map[string,object]** | 支払いメタデータ | [optional] 
**client_ip** | **string** | Client IP アドレス | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


