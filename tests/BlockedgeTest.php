<?php
/**
 * Tests for BlockEdge
 */

use PHPUnit\Framework\TestCase;
use Blockedge\Blockedge;

class BlockedgeTest extends TestCase {
    private Blockedge $instance;

    protected function setUp(): void {
        $this->instance = new Blockedge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockedge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
