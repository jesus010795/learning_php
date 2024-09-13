<?php
use PHPUnit\Framework\TestCase;
use App\Validate;

use function PHPUnit\Framework\assertTrue;

class ValidateTest extends TestCase

{
    public function test_email()
    {
        $email = Validate::email('example@mail.com');
        $this->assertTrue($email);
    }

    public function test_url()
    {
        $url = Validate::url("https://platzi.com");
        $this->assertTrue($url);
    }

    public function test_psw()
    {
        $psw = Validate::psw("1234560");
        $this->assertTrue($psw);
    }
}

?>