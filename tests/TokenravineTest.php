<?php
/**
 * Tests for TokenRavine
 */

use PHPUnit\Framework\TestCase;
use Tokenravine\Tokenravine;

class TokenravineTest extends TestCase {
    private Tokenravine $instance;

    protected function setUp(): void {
        $this->instance = new Tokenravine(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenravine::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
