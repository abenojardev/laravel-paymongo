<?php

namespace Luigel\Paymongo\Tests;

use Luigel\Paymongo\Facades\Paymongo;
use Luigel\Paymongo\Models\Source;

class SourceTest extends BaseTestCase
{
    /** @test */
    public function it_can_create_a_gcash_source()
    {
        /**
         * @var Source
         */
        $source = Paymongo::source()->create([
            'type' => 'gcash',
            'amount' => 100.00,
            'currency' => 'PHP',
            'redirect' => [
                'success' => 'http://localhost/success',
                'failed' => 'http://localhost/failed',
            ],
        ]);

        $this->assertInstanceOf(Source::class, $source);

        $this->assertEquals('source', $source->getType());

        $this->assertEquals('gcash', $source->getSourceType());

        $this->assertEquals(100.00, $source->getAmount());

        $this->assertEquals([
            'success' => 'http://localhost/success',
            'failed' => 'http://localhost/failed',
            'checkout_url' => $source->getCheckoutUrlRedirect(),
        ], $source->getRedirect());
    }

    /** @test */
    public function it_can_create_a_grab_pay_source()
    {
        /**
         * @var Source
         */
        $source = Paymongo::source()->create([
            'type' => 'grab_pay',
            'amount' => 100.00,
            'currency' => 'PHP',
            'redirect' => [
                'success' => 'http://localhost/success',
                'failed' => 'http://localhost/failed',
            ],
        ]);

        $this->assertInstanceOf(Source::class, $source);

        $this->assertEquals('source', $source->getType());

        $this->assertEquals('grab_pay', $source->getSourceType());

        $this->assertEquals(100.00, $source->getAmount());

        $this->assertEquals([
            'success' => 'http://localhost/success',
            'failed' => 'http://localhost/failed',
            'checkout_url' => $source->getCheckoutUrlRedirect(),
        ], $source->getRedirect());
    }
}
