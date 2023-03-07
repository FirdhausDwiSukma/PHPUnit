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
}