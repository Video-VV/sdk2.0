<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class TariffService
{
    /**
     * Тип дополнительной услуги, код из справочника доп. услуг
     * @Type("string")
     * @var string
     */
    public $code;
    /**
     * Стоимость услуги
     * @Type("float")
     * @var float
     */
    public $sum;
        /**
     * Стоимость услуги общая сумма (итого с НДС и скидкой в валюте взаиморасчётов)
     * @Type("float")
     * @var float
     */
    public $total_sum;
    /**
     * Процент скидки стоимости услуги
     * @Type("float")
     * @var float
     */
    public $discount_percent;
    /**
     * Общая сумма скидки стоимости услуги
     * @Type("float")
     * @var float
     */
    public $discount_sum;
    /**
     * Ставка НДС стоимости услуги
     * @Type("float")
     * @var float
     */
    public $vat_rate;
    /**
     * Сумма НДС стоимости услуги
     * @Type("float")
     * @var float
     */
    public $vat_sum;
}
