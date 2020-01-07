<?php

namespace Modules\Admin\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Admin\Repositories\AdminRepository;
use Faker\Generator as Faker;
use Modules\Admin\Entities\Admin;
use Illuminate\Database\Query\Builder;

class TestAdminRepository extends TestCase
{
    private $repository;
    private $faker;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
        $this->faker = new Faker();
    }
    /**
     * Test repository create method.
     *
     * @return void
     */
    public function testCreate()
    {
        $data = [
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$12$jR86cDKIAacl.U4XWdbBNO07tVOZVl2ppm7KFXNR7.apAd8R5UFBW',
            'remember_token' => Str::random(10),
        ];

        $this->assertInstanceOf(Admin::class, $this->repository->create($data));
    }

    /**
     * Test repository update method.
     *
     * @return void
     */
    public function testUpdate()
    {
        $id = Admin::first()->id;
        $data = [
            'username' => $faker->userName,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$12$jR86cDKIAacl.U4XWdbBNO07tVOZVl2ppm7KFXNR7.apAd8R5UFBW',
            'remember_token' => Str::random(10),
        ];

        $this->assertTrue($this->repository->update($data, $id));
    }

    /**
     * Test repository delete method.
     *
     * @return void
     */
    public function testDelete()
    {
        $id = Admin::first()->id;
        $this->assertTrue($this->repository->delete($id));
    }

    /**
     * Test repository getDataTableBuilder method.
     *
     * @return void
     */
    public function testGetDataTableBuilder()
    {
        $this->assertInstanceOf(Builder::class, $this->repository->create($data));
    }
}
