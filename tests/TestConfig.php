<?php

use PHPUnit\Framework\TestCase;
use Nigma\TEST\Config;

require '../vendor/autoload.php';


class TestConfig extends TestCase {


    public function test_Empty_Tableau(): void
    {
        $this->expectException(RuntimeException::class);
        $this->assertNotEmpty((new Config)->Array_Filter([]), 'Tableau est vide');
    }
    public function test_Array_Filter(): void
    {
        $this->assertEquals(['other' => 'default'], (new Config)->Array_Filter(['other' => '']), 'les deux variables ne sont pas égales');
    }

}