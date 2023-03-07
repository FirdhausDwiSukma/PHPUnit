<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase{
    public function testThatWeCanGetTheFirstName(){
        $user = new User;

        $user->setFirstName('usdhaus');

        $this->assertEquals($user->getFirstName(), 'usdhaus');
    }
    
    public function testThatWeCanGetTheLastName(){
        $user = new User;

        $user->setLastName('Garrett');

        $this->assertEquals($user->getLastName(), 'Garrett');
    }

    public function testFullNameIsReturned()
    {
        $user = new User;
        $user->setFirstName('usdhaus');
        $user->setLastName('Garrett');

        $this->assertEquals($user->getFullName(), 'usdhaus Garrett');
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new User;

        $user->setFirstName(' usdhaus    ');
        $user->setLastName('    Garrett');
        
        $this->assertEquals($user->getFirstName(), 'usdhaus');
        $this->assertEquals($user->getLastName(), 'Garrett');

    }

    public function testEmailAddressCanBeSet()
    {
        $user = new User;
        $user->setEmail('usdhaus@example.com');

        $this->assertEquals($user->getEmail(), 'usdhaus@example.com');
    }

    public function testEmailVariablesContainCorrectValue()
    {
        $user = new User;
        $user->setFirstName('usdhaus');
        $user->setLastName('Garrett');
        $user->setEmail('usdhaus@example.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'usdhaus Garrett');
        $this->assertEquals($emailVariables['email'], 'usdhaus@example.com');
    }
}