<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    /**
     * test_is_function_exists
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
}
