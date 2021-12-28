<?php

namespace Src\Engine;

use function cli\line;
use function cli\prompt;

function EngineGame(callable $conditionsGame, string $gameDescription): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameDescription);
    
    $countRounds = 3;
    $colCorrect = 0;
    for ($i = 0; $i < $countRounds; $i++) {
        [$question, $correctAnswer] = $conditionsGame();
        line("Question: %s", $question);
        $answer = prompt('Your answer ');

        if ($answer == $correctAnswer) {
            line('Correct!');
            $colCorrect++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($colCorrect === 3) {
        line("Congratulations, %s!", $name);
    }
}
