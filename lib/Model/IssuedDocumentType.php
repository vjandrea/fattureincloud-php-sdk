<?php
/**
 * IssuedDocumentType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */

/**
 * Fatture in Cloud API v2 - API Reference
 *
 * Connect your software with Fatture in Cloud, the invoicing platform chosen by more than 500.000 businesses in Italy.   The Fatture in Cloud API is based on REST, and makes possible to interact with the user related data prior authorization via OAuth2 protocol.
 *
 * The version of the OpenAPI document: 2.0.28
 * Contact: info@fattureincloud.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FattureInCloud\Model;
use \FattureInCloud\ObjectSerializer;

/**
 * IssuedDocumentType Class Doc Comment
 *
 * @category Class
 * @description Issued document type.
 * @package  FattureInCloud
 * @author   Fatture In Cloud API team
 * @link     https://fattureincloud.it
 */
class IssuedDocumentType
{
    /**
     * Possible values of this enum
     */
    public const INVOICE = 'invoice';

    public const QUOTE = 'quote';

    public const PROFORMA = 'proforma';

    public const RECEIPT = 'receipt';

    public const DELIVERY_NOTE = 'delivery_note';

    public const CREDIT_NOTE = 'credit_note';

    public const ORDER = 'order';

    public const WORK_REPORT = 'work_report';

    public const SUPPLIER_ORDER = 'supplier_order';

    public const SELF_OWN_INVOICE = 'self_own_invoice';

    public const SELF_SUPPLIER_INVOICE = 'self_supplier_invoice';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVOICE,
            self::QUOTE,
            self::PROFORMA,
            self::RECEIPT,
            self::DELIVERY_NOTE,
            self::CREDIT_NOTE,
            self::ORDER,
            self::WORK_REPORT,
            self::SUPPLIER_ORDER,
            self::SELF_OWN_INVOICE,
            self::SELF_SUPPLIER_INVOICE
        ];
    }
}


