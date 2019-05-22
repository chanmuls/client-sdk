<?php


namespace Userbenefit\Client\Tests\Feature\oauth;


use PHPUnit\Framework\TestCase;
use Userbenefit\Client\oauth\TokenClient;

class TokenClientTest extends TestCase
{
    /** @test */
    public function generateToken()
    {
        $tokenClient = new TokenClient();

        $this->assertEquals("hi", $tokenClient->testing());
    }
}