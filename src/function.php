<?php

/**
 * Бесконечная арифметическая прогрессия с первым членом start и шагом step.
 * @param int $start
 * @param int $step
 */
function icount($start = 0, $step = 1)
{
    for ($i = $start; $start > 0; $i += $step) {
        yield $i;
    }
}

/**
 * Возвращает по одному значению из последовательности, повторенной бесконечное число раз.
 */
function cycle($iterable)
{
    foreach ($iterable as $item) {
        yield $item;
    }
}

/**
 * Повторение елемента n - раз
 */
function repeat()
{
}

/**
 * Аккумулирование сумм
 */
function accumulate()
{
}

/**
 * Поэлементное возращение значений входящих итераторов
 * @param mixed ...$iterators
 * @return Generator
 */
function chain(...$iterators)
{
    foreach ($iterators as $iterator) {
        foreach ($iterator as $value) {
            yield from $value;
        }
    }
}

/**
 * Комбинация определенной длины из итератора без повторяющихся значений
 */
function combinations()
{
}

/**
 * Комбинация определенной длины из итератора с повторяющимися значениями
 */
function combinations_with_replacement()
{
}

/**
 *
 */
function compress()
{
}

/**
 *
 */
function dropwhile()
{
}

/**
 *
 */
function filterfalse()
{
}

/**
 *
 */
function groupby()
{
}

/**
 *
 */
function islice()
{
}

/**
 *
 */
function permutations()
{
}

/**
 *
 */
function product()
{
}

/**
 *
 */
function starmap()
{
}

/**
 *
 */
function takewhile()
{
}

/**
 *
 */
function tee()
{
}

/**
 *
 */
function zip_longest()
{
}
