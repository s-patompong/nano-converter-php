<?php

namespace SPatompong\NanoConverter\Tests;

use PHPUnit\Framework\TestCase;
use SPatompong\NanoConverter\NANO;

class NANOTest extends TestCase
{
    /** @test */
    public function test_it_can_convert_nano_to_raw()
    {
        $nano = new NANO("45.225513");
        $raw = $nano->toRaw();
        $this->assertEquals("45225513000000000000000000000000", $raw);

        $nano = new NANO("1523.6612442812");
        $raw = $nano->toRaw();
        $this->assertEquals("1523661244281200000000000000000000", $raw);

        $nano = new NANO("0.00025651283791");
        $raw = $nano->toRaw();
        $this->assertEquals("256512837910000000000000000", $raw);
    }
}
