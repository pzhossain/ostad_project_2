<?php

//Pre Defined questions

$questions = [
    ['quiz' => 'What is 2 + 2?', 'correct' => '4'],
    ['quiz' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['quiz' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
    ];


// Collecting answers from the user

$answers = [];
foreach ($questions as $index => $question) {
    echo ($index+1). ". " . $question ['quiz']. "\n";
    $answers []= trim (readline("Your answer: "));
}

//Calculation Function

function evaluateQuiz(array $questions, array $answers): int{
    $score=0;
    foreach ($questions as $index => $question){
        if ($answers[$index]===$question['correct']){
            $score++;
        }
    }
    return $score;
}

//Evaluating the user's score & give feedback.

$score= evaluateQuiz($questions, $answers);
echo "\n" . "You scored $score out of" . count($questions)."\n";
if ($score==count($questions)){
    echo "Excellent job!";
}elseif ($score > 1){
    echo "Good effort!";
}else{
    echo "Better luck next time!";
}