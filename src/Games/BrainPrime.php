<?php

namespace Src\Games\BrainPrime;

use function Src\Engine\EngineGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function Prime(): void
{
    $getQuestionAndAnswer = function (): array {
        $randomNumber = random_int(1, 101);
        $correctAnswer = 'yes';
        for ($i = 2; $i < $randomNumber; $i++) {
            if ($randomNumber % $i === 0) {
                $correctAnswer = 'no';
                break;
            }
        }

        return [$randomNumber, $correctAnswer];
    };

    EngineGame($getQuestionAndAnswer, DESCRIPTION);
}
