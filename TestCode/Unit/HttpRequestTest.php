<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class HttpRequestTest extends TestCase
{
    /** @test */

    public function testRoutes()
    {
        $appURL = env('APP_URL');
        
        $urls = [
            'http://127.0.0.1:8000',
        ];
        echo PHP_E0l;

        foreach ($urls as $urls) {
            $response = $this->get($url);
            if((int)$response->status() !==200){
                echo $appURL . $url . ' (FAILED) did not return a 200.';

            } else {
                echo $appURL . $url . ' (sucess ?) ';
                $this->assertTrue(true);
            }
            echo PHP_EOL;
        }
    }

    public function testAnother()
    {
        $appURL = env('APP_URL');
        
        $urls = [
            'http://127.0.0.1:8000/about',
        ];
        echo PHP_E0l;
        
        foreach ($urls as $urls) {
            $response = $this->get($url);
            if((int)$response->status() !==200){
                echo $appURL . $url . ' (FAILED) did not return a 200.';

            } else {
                echo $appURL . $url . ' (sucess ?) ';
                $this->assertTrue(true);
            }
            echo PHP_EOL;
        }
    }

    public function testAnother2()
    {
        $appURL = env('APP_URL');
        
        $urls = [
            'http://127.0.0.1:8000/category/espresso',
        ];
        echo PHP_E0l;
        
        foreach ($urls as $urls) {
            $response = $this->get($url);
            if((int)$response->status() !==200){
                echo $appURL . $url . ' (FAILED) did not return a 200.';

            } else {
                echo $appURL . $url . ' (sucess ?) ';
                $this->assertTrue(true);
            }
            echo PHP_EOL;
        }
    }
    
}

