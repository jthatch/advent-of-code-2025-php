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

        // dial has 100 positions (0-99), wraps around at boundaries
        $dial      = 50;
        $zeroCount = 0;

        $input->each(function (array $instruction) use (&$dial, &$zeroCount): void {
            [$direction, $distance] = $instruction;

            // rotate dial: R moves clockwise (+), L moves counter-clockwise (-)
            $dial += 'R' === $direction ? $distance : -$distance;

            // wrap to 0-99 range: modulo handles negatives via double-wrap pattern
            $dial = ($dial % 100 + 100) % 100;

            // count each time we land on position 0
            if (0 === $dial) {
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
        ;
    }
}
