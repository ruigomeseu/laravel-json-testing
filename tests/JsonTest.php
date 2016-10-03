<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JsonTest extends TestCase
{

    public function testJson()
    {
        $this->json('POST', '/api/json', [
            'test' => 'field'
            ])->see('field');
    }

    public function testGetJson()
    {
        $this->json('POST', '/api/getjson', [
            'test' => 'field'
            ])->see('field');
    }
}
