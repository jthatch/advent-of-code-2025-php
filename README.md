## Advent of Code 2025 PHP
The solutions to [advent of code 2025](https://adventofcode.com/2025), solved using PHP 8.5. By [James Thatcher](http://github.com/jthatch)


### Solutions 🥳🎉
🎄 [Day 1](/src/Days/Day1.php)
<!-- 🎄 [Day 1](/src/Days/Day1.php) | 🎅 [Day 2](/src/Days/Day2.php) | ☃️ [Day 3](/src/Days/Day3.php) | 🦌 [Day 4](/src/Days/Day4.php) | 🎁 [Day 5](/src/Days/Day5.php)
🔔 [Day 6](/src/Days/Day6.php) | ⭐ [Day 7](/src/Days/Day7.php) | 🕯️ [Day 8](/src/Days/Day8.php) | 🎀 [Day 9](/src/Days/Day9.php) | 🧦 [Day 10](/src/Days/Day10.php)
🍪 [Day 11](/src/Days/Day11.php) | 🥛 [Day 12](/src/Days/Day12.php) | ⛄ [Day 13](/src/Days/Day13.php) | 🎶 [Day 14](/src/Days/Day14.php) | 🧝 [Day 15](/src/Days/Day15.php)
❄️ [Day 16](/src/Days/Day16.php) | 🌟 [Day 17](/src/Days/Day17.php) | 🎵 [Day 18](/src/Days/Day18.php) | 🛷 [Day 19](/src/Days/Day19.php) | 🏔️ [Day 20](/src/Days/Day20.php)
🎊 [Day 21](/src/Days/Day21.php) | 🎉 [Day 22](/src/Days/Day22.php) | 🎈 [Day 23](/src/Days/Day23.php) | 🌲 [Day 24](/src/Days/Day24.php) | 🎆 [Day 25](/src/Days/Day25.php) -->

### About
My attempts at tacking the awesome challenges at [Advent of Code 2025](https://adventofcode.com/2025/day/1) using PHP 8.5.


### Commands
_Note: checkout the code then run `make run`. The docker and composer libraries will auto install._

**Solve all days puzzles**  
`make run`

**Solve an individual days puzzles**  
`make run day={N}` e.g. `make run day=13`

**Solve multiple days puzzles**  
`make run day={N},{N1}-{N2}...` e.g. `make run day=1-5,7,10,10,10` _Runs days 1-5, 7 and 10 3 times_

**Solve a single part of a days puzzles**  
`make run day={N} part={N}` e.g. `make run day=16 part=2`

**Create the next days PHP file and download puzzle from server**  
_Auto detects what current Day you are on and will create the next Day class (only if the file doesn't exist), get the puzzle input and create the markdown documentation file based on the instructions_
```shell
make next
# Created new file: src/Days/Day8.php
# Fetching latest input using day=8 AOC_COOKIE=53616c7465645f5f539435aCL1P
# ./input/day8.txt downloaded
# Fetching day 8 instructions...
# ✓ ./docs/day8.md created

```

**Use XDebug**  
`make xdebug`

**Xdebug can also be triggered on a single days and/or part**  
`make xdebug day={N}` e.g. `make xdebug day=13` or `make xdebug day=13 part=2`

IDE settings:
- `10000` - xdebug port
- `aoc-2025` - PHP_IDE_CONFIG (what you put in PHPStorm -> settings -> debug -> server -> name)
- `/app` - absolute path on the server
- see [xdebug.ini](/xdebug.ini) if you're stuck