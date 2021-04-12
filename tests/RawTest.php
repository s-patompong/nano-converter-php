<?php


namespace SPatompong\NanoConverter\Tests;

use PHPUnit\Framework\TestCase;
use SPatompong\NanoConverter\Raw;

class RawTest extends TestCase
{
    /** @test */
    public function test_it_can_convert_raw_to_nano()
    {
        $raw = new Raw("6500000000000000000000000000000");
        $nano = $raw->toNANO();
        $this->assertEquals("6.500000000000000000000000000000", $nano);

        $raw = new Raw("7126405971523");
        $nano = $raw->toNANO();
        $this->assertEquals("0.000000000000000007126405971523", $nano);

        $raw = new Raw("81637671241245656628124");
        $nano = $raw->toNANO();
        $this->assertEquals("0.000000081637671241245656628124", $nano);
    }
}
