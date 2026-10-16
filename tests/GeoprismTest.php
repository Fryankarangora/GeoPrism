<?php
/**
 * Tests for GeoPrism
 */

use PHPUnit\Framework\TestCase;
use Geoprism\Geoprism;

class GeoprismTest extends TestCase {
    private Geoprism $instance;

    protected function setUp(): void {
        $this->instance = new Geoprism(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Geoprism::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
