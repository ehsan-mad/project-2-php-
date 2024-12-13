Project (Module 2)
### Project Instructions: Terminal-Based Quiz Application in PHP

#### Task Description:

You will write a PHP script for a Quiz Application that:

1. Asks a set of predefined questions to the user.

2. Evaluates the user's answers.

3. Provides a score and feedback based on their performance.

---

#### Requirements:

1. Define the following function:

   - evaluateQuiz(array $questions, array $answers): int  

     - Accepts two arrays as parameters:

       - $questions: An array of questions where each question has a question text and a correct answer.

       - $answers: An array of user-provided answers.

     - Compares the user's answers to the correct answers and calculates the score.

     - Returns the total score.

2. Create a set of quiz questions:

   - Define an array of questions, each with a question and correct answer.

   - Example:  

     php

     $questions = [

         ['question' => 'What is 2 + 2?', 'correct' => 

'4'],

         ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

         ['question' => 'Who wrote "Hamlet"?',

'correct' => 'Shakespeare'],

     ];

     

3. Collect answers from the user:

   - Use a foreach loop to display each question and collect the user's answer using readline().

   - Store the user's answers in an array.

4. Evaluate the user's score:

   - Pass the $questions and $answers arrays to the evaluateQuiz function.

   - Display the score to the user in the format: "You scored X out of Y."  

5. Provide feedback based on performance:

   - If the user scores full marks, display: "Excellent job!"

   - If the user scores more than half but less than full, display: "Good effort!"

   - Otherwise, display: "Better luck next time!"

---

# Example Output:

1. What is 2 + 2?

Your answer: 4

2. What is the capital of France?

Your answer: Paris

3. Who wrote "Hamlet"?

Your answer: Shakespeare

You scored 3 out of 3.

Excellent job!
