<?php


namespace SPatompong\NanoConverter;

use Brick\Math\BigDecimal;
use Brick\Math\BigInteger;
use Brick\Math\RoundingMode;

/**
 * Raw is the smallest unit of NANO
 *
 * Class Raw
 * @package SPatompong\NanoConverter
 */
final class Raw
{
    private BigDecimal $raw;

    public function __construct(string $raw)
    {
        $this->raw = BigDecimal::of($raw);
    }

    public function toNANO(): BigDecimal
    {
        return $this->raw->dividedBy(
            that: BigInteger::of('1000000000000000000000000000000'),
            scale: 30,
        );
    }
}
