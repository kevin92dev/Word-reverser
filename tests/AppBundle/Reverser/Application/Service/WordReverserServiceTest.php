<?php

namespace Tests\AppBundle\Reverser\Application\Service;

use AppBundle\Reverser\Application\Service\WordReverserService;
use PHPUnit\Framework\TestCase;

class DonationCreateServiceTest extends TestCase
{
    public function testReverse()
    {
        $words = [
            'Lorem',
            'ipsum',
            'dolor',
            'sit',
            'amet'
        ];

        $result = 'tema tis rolod muspi meroL';

        $wordReverserService = new WordReverserService();

        $this->assertEquals($result, $wordReverserService->reverse($words));
    }
}