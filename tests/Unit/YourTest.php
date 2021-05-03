<?php

namespace Tests\Unit;

use App\Http\Controllers\YourController;
use PHPUnit\Framework\TestCase;

class YourTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $your = new YourController();
        $hasil = $your->externalMethod(3,5);
        $this->assertEquals(8,$hasil);

    }
}
