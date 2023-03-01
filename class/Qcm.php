<?php 
class Qcm
{
    private $questions = [];

    //GETER ET SETER questions
    public function setQuestions(Question $question)
    {
        array_push($this->questions, $question);
    }
    public function getQuestions()
    {
        return $this->questions;
    }

    // fonction qui génère le HTML avec le contenu de nos objets Question et Answer
    public function generate()
    {
        foreach ($this->questions as $key => $question) {
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

}