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
}