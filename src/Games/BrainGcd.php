<?php

namespace Src\Games\BrainGcd;

use function Src\Engine\EngineGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $firstNumber, int $secondNumber): int
{
    $min = $firstNumber < $secondNumber ? $firstNumber : $secondNumber;
    $result = 0;
    for ($i = 1; $i <= $min; $i++) {
        if ($firstNumber % $i === 0 && $secondNumber % $i === 0) {
            $result = $i;
        }
    }
    return $result;
}

function GcdBrain(): void
{
    $getQuestionAndAnswer = function (): array {
        $firstNumber = random_int(1, 99);
        $secondNumber = random_int(1, 99);
        $question = "$firstNumber $secondNumber";
        $correctAnswer = gcd($firstNumber, $secondNumber);

        return [$question, $correctAnswer];
    };

    EngineGame($getQuestionAndAnswer, DESCRIPTION);
}
