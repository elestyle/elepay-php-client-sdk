<?php
/**
 * ChargeDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * elepay API リファレンス
 *
 * elepay APIはRESTをベースに構成された決済APIです。支払い処理、返金処理など、決済に関わる運用における様々なことができます。
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 0.0.2
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\jp.elestyle.elepay.model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ChargeDto Class Doc Comment
 *
 * @category Class
 * @description 支払いオブジェクト
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChargeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChargeDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'object' => 'string',
        'live_mode' => 'bool',
        'amount' => 'int',
        'currency' => 'string',
        'payment_method' => '\Swagger\Client\jp.elestyle.elepay.model\PaymentMethodType',
        'order_no' => 'string',
        'description' => 'string',
        'extra' => 'map[string,object]',
        'metadata' => 'map[string,object]',
        'client_ip' => 'string',
        'paid' => 'bool',
        'refunded' => 'bool',
        'refunds' => '\Swagger\Client\jp.elestyle.elepay.model\RefundExtDto',
        'status' => 'string',
        'credential' => 'string',
        'paid_time' => 'int',
        'refund_time' => 'int',
        'expiry_time' => 'int',
        'settle_time' => 'int',
        'create_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'object' => null,
        'live_mode' => null,
        'amount' => null,
        'currency' => null,
        'payment_method' => null,
        'order_no' => null,
        'description' => null,
        'extra' => null,
        'metadata' => null,
        'client_ip' => null,
        'paid' => null,
        'refunded' => null,
        'refunds' => null,
        'status' => null,
        'credential' => null,
        'paid_time' => 'int64',
        'refund_time' => 'int64',
        'expiry_time' => 'int64',
        'settle_time' => 'int64',
        'create_time' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'object' => 'object',
        'live_mode' => 'liveMode',
        'amount' => 'amount',
        'currency' => 'currency',
        'payment_method' => 'paymentMethod',
        'order_no' => 'orderNo',
        'description' => 'description',
        'extra' => 'extra',
        'metadata' => 'metadata',
        'client_ip' => 'clientIp',
        'paid' => 'paid',
        'refunded' => 'refunded',
        'refunds' => 'refunds',
        'status' => 'status',
        'credential' => 'credential',
        'paid_time' => 'paidTime',
        'refund_time' => 'refundTime',
        'expiry_time' => 'expiryTime',
        'settle_time' => 'settleTime',
        'create_time' => 'createTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object' => 'setObject',
        'live_mode' => 'setLiveMode',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'payment_method' => 'setPaymentMethod',
        'order_no' => 'setOrderNo',
        'description' => 'setDescription',
        'extra' => 'setExtra',
        'metadata' => 'setMetadata',
        'client_ip' => 'setClientIp',
        'paid' => 'setPaid',
        'refunded' => 'setRefunded',
        'refunds' => 'setRefunds',
        'status' => 'setStatus',
        'credential' => 'setCredential',
        'paid_time' => 'setPaidTime',
        'refund_time' => 'setRefundTime',
        'expiry_time' => 'setExpiryTime',
        'settle_time' => 'setSettleTime',
        'create_time' => 'setCreateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object' => 'getObject',
        'live_mode' => 'getLiveMode',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'payment_method' => 'getPaymentMethod',
        'order_no' => 'getOrderNo',
        'description' => 'getDescription',
        'extra' => 'getExtra',
        'metadata' => 'getMetadata',
        'client_ip' => 'getClientIp',
        'paid' => 'getPaid',
        'refunded' => 'getRefunded',
        'refunds' => 'getRefunds',
        'status' => 'getStatus',
        'credential' => 'getCredential',
        'paid_time' => 'getPaidTime',
        'refund_time' => 'getRefundTime',
        'expiry_time' => 'getExpiryTime',
        'settle_time' => 'getSettleTime',
        'create_time' => 'getCreateTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : 'charge';
        $this->container['live_mode'] = isset($data['live_mode']) ? $data['live_mode'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : 'JPY';
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['client_ip'] = isset($data['client_ip']) ? $data['client_ip'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['refunded'] = isset($data['refunded']) ? $data['refunded'] : null;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['credential'] = isset($data['credential']) ? $data['credential'] : null;
        $this->container['paid_time'] = isset($data['paid_time']) ? $data['paid_time'] : null;
        $this->container['refund_time'] = isset($data['refund_time']) ? $data['refund_time'] : null;
        $this->container['expiry_time'] = isset($data['expiry_time']) ? $data['expiry_time'] : null;
        $this->container['settle_time'] = isset($data['settle_time']) ? $data['settle_time'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Charge ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object 対象種類の表記
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets live_mode
     *
     * @return bool
     */
    public function getLiveMode()
    {
        return $this->container['live_mode'];
    }

    /**
     * Sets live_mode
     *
     * @param bool $live_mode 本番モードかどうか - false テストモード - true 本番モード
     *
     * @return $this
     */
    public function setLiveMode($live_mode)
    {
        $this->container['live_mode'] = $live_mode;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount 支払い金額
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency 通貨コード (ISO_4217)
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \Swagger\Client\jp.elestyle.elepay.model\PaymentMethodType
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Swagger\Client\jp.elestyle.elepay.model\PaymentMethodType $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param string $order_no お客様システム側のオーダーNo、例えば注文番号、決済IDなど
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 支払い説明文
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return map[string,object]
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param map[string,object] $extra 支払いエキストラデータ
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,object]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,object] $metadata 支払いメタデータ
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets client_ip
     *
     * @return string
     */
    public function getClientIp()
    {
        return $this->container['client_ip'];
    }

    /**
     * Sets client_ip
     *
     * @param string $client_ip Client IP アドレス
     *
     * @return $this
     */
    public function setClientIp($client_ip)
    {
        $this->container['client_ip'] = $client_ip;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return bool
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool $paid 支払い済みフラグ
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return bool
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param bool $refunded 返金済みフラグ
     *
     * @return $this
     */
    public function setRefunded($refunded)
    {
        $this->container['refunded'] = $refunded;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \Swagger\Client\jp.elestyle.elepay.model\RefundExtDto
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \Swagger\Client\jp.elestyle.elepay.model\RefundExtDto $refunds すでに返金された場合、返金の詳細内容を返します。
     *
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 支払い状態
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets credential
     *
     * @return string
     */
    public function getCredential()
    {
        return $this->container['credential'];
    }

    /**
     * Sets credential
     *
     * @param string $credential Client SDK の認証情報
     *
     * @return $this
     */
    public function setCredential($credential)
    {
        $this->container['credential'] = $credential;

        return $this;
    }

    /**
     * Gets paid_time
     *
     * @return int
     */
    public function getPaidTime()
    {
        return $this->container['paid_time'];
    }

    /**
     * Sets paid_time
     *
     * @param int $paid_time 支払い時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setPaidTime($paid_time)
    {
        $this->container['paid_time'] = $paid_time;

        return $this;
    }

    /**
     * Gets refund_time
     *
     * @return int
     */
    public function getRefundTime()
    {
        return $this->container['refund_time'];
    }

    /**
     * Sets refund_time
     *
     * @param int $refund_time 返金時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setRefundTime($refund_time)
    {
        $this->container['refund_time'] = $refund_time;

        return $this;
    }

    /**
     * Gets expiry_time
     *
     * @return int
     */
    public function getExpiryTime()
    {
        return $this->container['expiry_time'];
    }

    /**
     * Sets expiry_time
     *
     * @param int $expiry_time 支払い請求有効時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setExpiryTime($expiry_time)
    {
        $this->container['expiry_time'] = $expiry_time;

        return $this;
    }

    /**
     * Gets settle_time
     *
     * @return int
     */
    public function getSettleTime()
    {
        return $this->container['settle_time'];
    }

    /**
     * Sets settle_time
     *
     * @param int $settle_time 支払い締め時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setSettleTime($settle_time)
    {
        $this->container['settle_time'] = $settle_time;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param int $create_time 支払い新規時間のUTCタイムスタンプ
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

