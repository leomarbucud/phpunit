<?php

class UserTest extends \PHPUnit\Framework\TestCase {


    /** @test */
    public function that_we_can_get_first_name() {

        $user = new \App\Models\User;

        $user->setFirstName('Leo');

        $this->assertEquals($user->getFirstName(), 'Leo');
    }

}