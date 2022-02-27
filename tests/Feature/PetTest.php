<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Pet;
use Mockery\MockInterface;



class PetTest extends TestCase
{

    private MockInterface $petSpy;

    protected function setUp(): void
    {
        parent::setUp();

        $this->petSpy = $this->spy(Pet::class);
    }


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_toString(){
        //arrange
        $pet = Pet::make([
            'name' => 'Fido',
            'age' => 5,
            'type' => 'hound', //wonbat will have to change these to constants
        ]);

        //act
        $actualResponse = $pet->toString();

        $expectedResponse = 'Fido is a 5 year old hound.';

        //assert
        $this->assertEquals($actualResponse,$expectedResponse);

        


    }
}
