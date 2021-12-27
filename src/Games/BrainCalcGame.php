<?php

namespace Src\Games\BrainCalcGame;

use function Src\Engine\EngineGame;

const DESCRIPTION = 'What is the result of the expression?';

function CalcGame(): void
{
    $getQuestionAndAnswer = function (): array {
        $operations = ['+', '-', '*'];
        $rand_key = array_rand($operations, 1);
        $randOperation = $operations[$rand_key];
        $firstNumber = random_int(0, 100);
        $secondNumber = random_int(0, 100);
        $expresion = "$firstNumber $randOperation $secondNumber";
        $correctAnswer = 0;
        switch ($randOperation) {
            case '+':
                $correctAnswer = $firstNumber + $secondNumber;
                break;
            case '-':
                $correctAnswer = $firstNumber - $secondNumber;
                break;
            case '*':
                $correctAnswer = $firstNumber * $secondNumber;
                break;
        }

        return [$expresion, $correctAnswer];
    };

    EngineGame($getQuestionAndAnswer, DESCRIPTION);
}
