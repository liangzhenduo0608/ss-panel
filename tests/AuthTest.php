<?php


class AuthTest extends TestCase
{
    public function testAuthLogin()
    {
        $this->setProdEnv();
        $this->get('/auth/login');
        $this->assertEquals('200', $this->response->getStatusCode());
    }

    public function testAuthRegister()
    {
        $this->get('/auth/register');
        $this->assertEquals('200', $this->response->getStatusCode());
    }

}