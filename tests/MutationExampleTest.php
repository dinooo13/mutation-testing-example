<?php

declare(strict_types=1);

namespace App\Tests;

use App\MutationExample;
use Exception;
use Generator;
use PHPUnit\Framework\TestCase;

class MutationExampleTest extends TestCase
{
    /**
     * @test
     * @dataProvider mutationExampleDataProvider()
     */
    public function AgeShouldReturnBool(int $age, bool $result): void
    {
        $subject = new MutationExample();

        self::assertSame($result, $subject->isAgeInBoundaries($age));
    }

    /**
     * @throws Exception
     */
    private function mutationExampleDataProvider(): Generator
    {
        yield [18, true];
        yield [25, true];
        yield [55, true];
    }
}