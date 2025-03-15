<?php

//Function to evaluate the quiz
function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if (strtolower(trim($answers[$index])) === strtolower(trim($question['correct']))) {
            $score++;
        }
    }
    return $score;
}




//quiz questions
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
    ['question' => 'What is the largest planet in our Solar System?', 'correct' => 'Jupiter'],
    ['question' => 'Which element has the chemical symbol "O"?', 'correct' => 'Oxygen'],
    ['question' => 'How many continents are there on Earth?', 'correct' => '7'],
    ['question' => 'What is the square root of 64?', 'correct' => '8'],
    ['question' => 'What is the speed of light in a vacuum (approximate km/s)?', 'correct' => '300000'],
];




//user answers
$answers = [];
echo "Welcome to the Ultimate Quiz!\nLet's test your knowledge. 🎉\n\n";

foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer: "));
}




//Evaluate quiz
$score = evaluateQuiz($questions, $answers);
$totalQuestions = count($questions);
$percentage = ($score / $totalQuestions) * 100;




// Display results
echo "\nYou scored $score out of $totalQuestions.\n";
echo "That's " . round($percentage, 2) . "% correct!\n";




//Calculate score and provide feedback
if ($percentage == 100) {
    echo "🎉 Excellent job! You got everything right!\n";
} elseif ($percentage >= 70) {
    echo "👍 Good effort! Keep it up!\n";
} elseif ($percentage >= 50) {
    echo "🙂 Not bad! But there's room for improvement.\n";
} else {
    echo "😕 Better luck next time! Keep learning.\n";
}
