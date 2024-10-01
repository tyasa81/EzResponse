<?php

namespace tyasa81\EzResponse\Tests\Unit;

use tyasa81\EzResponse\Responses\FailResponse;
use tyasa81\EzResponse\Tests\TestCase;

class ExampleUnitTest extends TestCase
{
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_response_can_be_accessed_as_array(): void
    {
        $fail = new FailResponse(
            message: "test",
            data: [
                "test"=>1
            ]
        );
        $this->assertEquals("test",$fail["message"]);
        $this->assertEquals(1,$fail['data']["test"]);
        $this->assertEquals(false,$fail["success"]);
    }
}
