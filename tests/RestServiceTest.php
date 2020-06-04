<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class RestServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRestService()
    {
        $this->get('/');
        $this->seeStatusCode(200);
        $this->seeJsonStructure(['result']);
    }
}
