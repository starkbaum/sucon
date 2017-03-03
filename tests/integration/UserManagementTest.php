<?php

use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserManagementTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @var FakerGenerator
     */
    protected $faker;

    /**
     * Setup faker.
     */
    public function setUp()
    {
        parent::setUp();
        $this->faker = Faker::create();
    }

    /** @test */
    public function a_user_can_login()
    {
        $this->visit('/auth/login');
        $this->type('jane@cbi.com', 'email');
        $this->type('patrickJane', 'password');
        $this->press('action');
        $this->seePageIs('/courses');
    }

    /** @test */
    public function a_user_can_register()
    {
        $userName = $this->faker->name;
        $userEmail = $this->faker->email;
        $userPassword = 'password';

        $this->visit('/auth/register');
        $this->type($userName, 'name');
        $this->type($userEmail, 'email');
        $this->type($userPassword, 'password');
        $this->type($userPassword, 'password_confirmation');
        $this->press('action');
        $this->seePageIs('/courses');
        $this->seeInDatabase('users', ['name' => $userName, 'email' => $userEmail]);
    }
}
