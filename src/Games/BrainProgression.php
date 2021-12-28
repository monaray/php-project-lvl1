<?php

namespace Src\Games\BrainProgression;

use function Src\Engine\EngineGame;

const DESCRIPTION = 'What number is missing in the progression?';

function Progression(): void
{
    $getQuestionAndAnswer = function (): array {
        $firstNumber = random_int(1, 99);
        $progressionStep = random_int(2, 6);
        $randNumbers = [];
        $randNumbers[0] = $firstNumber;
        $lengthProgression = 10; 
        for ($i = 0; $i < $lengthProgression - 1; $i++) {
            $randNumbers[$i + 1] = $randNumbers[$i] + $progressionStep;
        }
        $rand_key = array_rand($randNumbers, 1);
        $correctAnswer = $randNumbers[$rand_key];
        $randNumbers[$rand_key] = '..';
        $question = implode(" ", $randNumbers);

        return [$question, $correctAnswer];
    };

    EngineGame($getQuestionAndAnswer, DESCRIPTION);
}
