<?php

$questions = [

    ['question' => 'What is 2 + 2?', 'correct' => '4'],

    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],

];

$answers = [];

foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your Answer:"));

}

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++;
        }

    }
    return $score;
}
$score = evaluateQuiz($questions, $answers);
echo "You scored $score, out of " . count($questions) . "\n";

if ($score == count($questions)) {
    echo "Excellent job!";
} elseif ($score > 1) {
    echo "Good effort!";
} else {
    echo "Better luck next time!";
}
