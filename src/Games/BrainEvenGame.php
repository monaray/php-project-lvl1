<?php

namespace Src\Gamas\BrainEvenGame;

use function Src\Engine\EngineGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function EvenGame(): void
{
  $getQuestionAndAnswer = function (): array {
    $question = random_int(0, 100);
    $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';

    return [$question, $correctAnswer];
  };

  EngineGame($getQuestionAndAnswer, DESCRIPTION);
}
