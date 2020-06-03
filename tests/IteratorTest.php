<?php

namespace Tests;

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
        $this->assertEquals(\Generator::class, get_class($generator));
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
        } catch (\Exception $exception) {
            $this->assertEquals(\Exception::class, get_class($exception));
        }
    }
}
