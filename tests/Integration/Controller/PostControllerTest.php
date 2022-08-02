<?php
namespace App\Tests\Integration\Controller;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class PostControllerTest extends KernelTestCase{

    public function testShow()
    {
        $kernel = self::bootKernel();
        $fakeRequest = Request::create('/post/1', 'GET');
        $response = $kernel->handle($fakeRequest,HttpKernelInterface::MAIN_REQUEST,false);
        $this->assertStringContainsString('test title 1',$response->getContent());
    }

}