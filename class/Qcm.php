<?php 
class Qcm
{
    private $db;
    private $questions = [];

    public function __construct(PDO $db)
    {
        $this->setDb($db);
        $this->getQuestionsFromDb();
    }

    //GETER ET SETER questions
    public function setQuestions(Question $question)
    {
        array_push($this->questions, $question);
    }

    public function getQuestionsFromDb()
    {
        $query = $this->db->query('SELECT * FROM questions');
        $allQuestions = $query->fetchAll();

        foreach ($allQuestions as $key => $questionData) {

            $question = new Question($questionData);

            $answerByQuestionId = $this->getAnswerByQuestionId($question);

            foreach ($answerByQuestionId as $key => $answerData) {
                $question->setAnswer(new Answer($answerData));
            }
            $this->setQuestions($question);
        }
        return $this->questions;
    }

    public function getAnswerByQuestionId(Question $question)
    {
        $query = $this->db->prepare('SELECT * FROM answers WHERE question_id = :questionId');
        $query->execute([
            "questionId" => $question->getId()
        ]);
        $allAnswersFromQuestion = $query->fetchAll();
        return $allAnswersFromQuestion;
    }

    // fonction qui génère le HTML avec le contenu de nos objets Question et Answer
    public function generate()
    {
        foreach ($this->questions as $question) {
            echo "
                <h3> {$question->getTitle()} </h3> 
            ";
            foreach ($question->getAnswers() as $key => $answer) {
              echo "
                <div>
                    <input type='radio' id='{$key}' name=' {$key}reponse' value='{$answer->getContent()}'>
                    <label for='{$key}reponse'>{$answer->getContent()}</label>
                </div>
              ";
           }
       }
    }

    /**
     * Set the value of db
     */
    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }
}