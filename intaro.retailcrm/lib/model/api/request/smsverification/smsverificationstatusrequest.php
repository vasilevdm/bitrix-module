<?php
/**
 * PHP version 7.1
 *
 * @category Integration
 * @package  Intaro\RetailCrm\Model\Api\Response\SmsVerification
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  MIT
 * @link     http://retailcrm.ru
 * @see      http://retailcrm.ru/docs
 */
namespace Intaro\RetailCrm\Model\Api\Response\SmsVerification;

use Intaro\RetailCrm\Model\Api\AbstractApiModel;
use Intaro\RetailCrm\Component\Json\Mapping;

/**
 * Class SmsVerificationStatusRequest
 *
 * @package Intaro\RetailCrm\Model\Api\Response\SmsVerification
 */
class SmsVerificationStatusRequest extends AbstractApiModel
{
    /**
     * Номер телефона для отправки сообщения
     *
     * @var string $phone
     *
     * @Mapping\Type("string")
     * @Mapping\SerializedName("checkId")
     */
    public $checkId;
}
