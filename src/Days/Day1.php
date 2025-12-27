<?php

declare(strict_types=1);

namespace App\Days;

use App\Contracts\Day;
use Illuminate\Support\Collection;

class Day1 extends Day
{
    public const EXAMPLE1 = <<<EOF
    L68
    L30
    R48
    L5
    R60
    L55
    L1
    L99
    R14
    L82
    EOF;

    /**
     * Solve Part 1 of the day's problem.
     */
    public function solvePart1(mixed $input): int|string|null
    {
        $input = $this->parseInput($input);

        // dial has 100 positions (1-100), wraps around at boundaries
        $dial      = 50;
        $zeroCount = 0;

        $input->each(function (array $instruction) use (&$dial, &$zeroCount): void {
            [$direction, $distance] = $instruction;

            // rotate dial: R moves clockwise (+), L moves counter-clockwise (-)
            $dial += 'R' === $direction ? $distance : -$distance;

            // wrap to 1-100 range: shift to 0-based, modulo wrap, shift back to 1-based
            $dial = (($dial - 1) % 100 + 100) % 100 + 1;

            // count each time we land on position 100
            if (100 === $dial) {
                $zeroCount++;
            }
        });

        return $zeroCount;
    }

    /**
     * Solve Part 2 of the day's problem.
     */
    public function solvePart2(mixed $input): int|string|null
    {
        $input = $this->parseInput($input);

        // todo: implement solution for Part 2

        return null;
    }

    /**
     * Parse the input data.
     */
    protected function parseInput(mixed $input): Collection
    {
        $input = is_array($input) ? $input : explode("\n", $input);

        return collect($input)
            ->map(fn (string $line) => [$line[0], (int) mb_substr($line, 1)])
            // todo: add any necessary transformations
        ;
    }
}
