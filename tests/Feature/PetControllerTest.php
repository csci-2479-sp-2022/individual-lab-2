<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Pet;

use Mockery;
use Mockery\MockInterface;

class PetControllerTest extends TestCase
{
    private MockInterface $petServiceSpy;
    private $pets = [];

    /**
     * A basic feature test example.
     *
     * @return void
     */


    protected function setUp(): void
    {
        parent::setUp();

        $this->petServiceSpy = $this->spy(PetService::class);



        
    }

    public function test_PetService_no_ID(){
        return [
            Pet::make([
                'name' => 'Fido',
                'age' => 5,
                'type' => 'hound', //wonbat will have to change these to constants
            ]),
            Pet::make([
                'name' => 'Milo',
                'age' => 3,
                'type' => 'hound',
            ]),
        ];
    }

    public function test_PetService_Single_Pet(){
        return [
            Pet::make([
                'name' => 'Fido',
                'age' => 5,
                'type' => 'hound',
            ])
        ];
    }

    public function test_PetService_Return_404(){
        return 404;
    }


    public function test_example()
    {

        

        $response = $this->get('/');

        $response->assertStatus(200);


    }

    private static function getPets(){
        return [
            Pet::make([
                'id' => 1,
                'name' => 'Fido',
                'age' => 5,
                'type' => 'hound',
            ]),
            Pet::make([
                'id' => 2,
                'name' => 'Milo',
                'age' => 3,
                'type' => 'mutt',
            ]),
        ];
    }

    
}
