<?php

/**
<103150111@qq.com>
 * add import rawkey
 */

namespace Web3\Methods\Personal;

use InvalidArgumentException;
use Web3\Methods\EthMethod;
use Web3\Validators\AddressValidator;
use Web3\Validators\StringValidator;
use Web3\Validators\QuantityValidator;
use Web3\Formatters\AddressFormatter;
use Web3\Formatters\StringFormatter;
use Web3\Formatters\NumberFormatter;
class ImportRawKey extends EthMethod
{
    /**
     * validators
     *
     * @var array
     */
    protected $validators = [
        StringValidator::class, StringValidator::class
    ];

    /**
     * outputFormatters
     *
     * @var array
     */
    protected $outputFormatters = [];

    /**
     * defaultValues
     *
     * @var array
     */
    protected $defaultValues = [];

    /**
     * construct
     *
     * @param string $method
     * @param array $arguments
     * @return void
     */
    // public function __construct($method='', $arguments=[])
    // {
    //     parent::__construct($method, $arguments);
    // }
}