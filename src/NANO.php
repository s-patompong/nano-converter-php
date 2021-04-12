<?php

namespace SPatompong\NanoConverter;

use Brick\Math\BigDecimal;
use Brick\Math\BigInteger;

/**
 * NANO is the popular way to use NANO currency
 * 1 NANO is 10^30 raw
 *
 * Class NANO
 * @package SPatompong\NanoConverter
 */
final class NANO
{
    private BigDecimal $nano;

    public function __construct(string $nano)
    {
        $this->nano = BigDecimal::of($nano);
    }

    public function toRaw(): BigDecimal
    {
        return $this->nano->multipliedBy(BigInteger::of('1000000000000000000000000000000'))->toScale(0);
    }
}
