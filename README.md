<H2>Project (Module 2)</H2>
<H1>### Project Instructions: Terminal-Based Quiz Application in PHP</H1>

<h3>#### Task Description:</h3>

<p>You will write a PHP script for a Quiz Application that:</p>

<H5>1. Asks a set of predefined questions to the user.</H5>

<H5>2. Evaluates the user's answers.</H5>

<H5>3. Provides a score and feedback based on their performance.</H5>

---

<h3>#### Requirements:</h3>

<H5>1. Define the following function:</H5>

 <p>- evaluateQuiz(array $questions, array $answers): int  

- Accepts two arrays as parameters:
- $questions: An array of questions where each question has a question text and a correct answer.
- $answers: An array of user-provided answers.
- Compares the user's answers to the correct answers and calculates the score.
- Returns the total score.</p>  

<H5>2. Create a set of quiz questions:</H5>

<p>- Define an array of questions, each with a question and correct answer.

   - Example:  

     $questions = [

         ['question' => 'What is 2 + 2?', 'correct' => 

'4'],

         ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

         ['question' => 'Who wrote "Hamlet"?',

'correct' => 'Shakespeare'],

     ];
</p>
     

<H5>3. Collect answers from the user:</H5>

 <p></p>  - Use a foreach loop to display each question and collect the user's answer using readline().

   - Store the user's answers in an array.</p>

<H5>4. Evaluate the user's score:</H5>

<p>- Pass the $questions and $answers arrays to the evaluateQuiz function.

   - Display the score to the user in the format: "You scored X out of Y." </p>    

<H5>5. Provide feedback based on performance:</H5>

   <p>- If the user scores full marks, display: "Excellent job!"

   - If the user scores more than half but less than full, display: "Good effort!"

   - Otherwise, display: "Better luck next time!"

---</p>

<H3># Example Output:</H3>

<H5>1. What is 2 + 2?</H5>

Your answer: 4

<H5>2. What is the capital of France?</H5>

Your answer: Paris

<H5>3. Who wrote "Hamlet"?</H5>

Your answer: Shakespeare

You scored 3 out of 3.

Excellent job!
