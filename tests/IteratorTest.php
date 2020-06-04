<?php

namespace Tests;

use Generator;
use Exception;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    /**
     * Test package functions is exists.
     */
    public function testIsFunctionExists()
    {
        $this->assertTrue(function_exists('icount'));
        $this->assertTrue(function_exists('cycle'));
        $this->assertTrue(function_exists('repeat'));
        $this->assertTrue(function_exists('accumulate'));
        $this->assertTrue(function_exists('chain'));
        $this->assertTrue(function_exists('combinations'));
        $this->assertTrue(function_exists('combinations_with_replacement'));
        $this->assertTrue(function_exists('compress'));
        $this->assertTrue(function_exists('dropwhile'));
        $this->assertTrue(function_exists('filterfalse'));
        $this->assertTrue(function_exists('groupby'));
        $this->assertTrue(function_exists('islice'));
        $this->assertTrue(function_exists('permutations'));
        $this->assertTrue(function_exists('product'));
        $this->assertTrue(function_exists('starmap'));
        $this->assertTrue(function_exists('takewhile'));
        $this->assertTrue(function_exists('tee'));
        $this->assertTrue(function_exists('zip_longest'));
    }

    public function testIcountFunction()
    {
        $generator = icount(1, 1);
        $this->assertEquals(Generator::class, get_class($generator));
        $this->assertEquals(1, $generator->current());
        $generator->next();
        $this->assertEquals(2, $generator->current());
        $generator->next();
        $this->assertEquals(3, $generator->current());
    }

    public function testIsValidException()
    {
        try {
            $generator = icount(1, 1);
            $generator->next();
            $generator->rewind();
        } catch (Exception $exception) {
            $this->assertEquals(Exception::class, get_class($exception));
        }
    }

    public function testCycleFunction()
    {
        $generator = cycle([1,2,3]);
        $this->assertInstanceOf(Generator::class, $generator);
    }

    public function testRepeatFunction()
    {
        $generator = repeat(4, 10);
        $this->assertInstanceOf(Generator::class, $generator);
        $this->assertEquals(4, $generator->current());
        $generator->next();
        $this->assertEquals(4, $generator->current());
    }

    public function testAccumulateFunction()
    {
        $this->assertNull(accumulate());
    }

    public function testChainFunction()
    {
        $generator = chain([
            [1,2,3],
            [4,5,6],
        ]);
        $this->assertInstanceOf(Generator::class, $generator);
        $this->assertEquals(1, $generator->current());
        $generator->next();
        $this->assertEquals(2, $generator->current());
        $generator->next();
        $this->assertEquals(3, $generator->current());
        $generator->next();
        $this->assertEquals(4, $generator->current());
        $generator->next();
        $this->assertEquals(5, $generator->current());
        $generator->next();
        $this->assertEquals(6, $generator->current());
        $generator->next();
        $this->assertFalse($generator->valid());
    }

    public function testCombinationsFunction()
    {
        $this->assertNull(combinations());
    }

    public function testCombinationsWithReplacement()
    {
        $this->assertNull(combinations_with_replacement());
    }

    public function testComporessFunction()
    {
        $this->assertNull(compress());
    }

    public function testDropwhileFunction()
    {
        $this->assertNull(dropwhile());
    }

    public function testFilterfalseFunction()
    {
        $this->assertNull(filterfalse());
    }

    public function testGroupbyFunction()
    {
        $this->assertNull(groupby());
    }

    public function testIsliceFunction()
    {
        $this->assertNull(islice());
    }

    public function testPermutationsFunction()
    {
        $this->assertNull(permutations());
    }

    public function testProductFunction()
    {
        $this->assertNull(product());
    }

    public function testStarmapFunction()
    {
        $this->assertNull(starmap());
    }

    public function testTakewhileFunction()
    {
        $this->assertNull(takewhile());
    }

    public function testTeeFunction()
    {
        $this->assertNull(tee());
    }

    public function testZipLongestFunction()
    {
        $this->assertNull(zip_longest());
    }
}
