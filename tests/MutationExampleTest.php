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
        yield [17, false];
        yield [18, true];
        yield [random_int(19, 98), true];
        yield [99, true];
        yield [100, false];
    }
}