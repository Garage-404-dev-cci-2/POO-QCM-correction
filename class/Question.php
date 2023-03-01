<?php 
class Question 
{
    private $title;
    private $explaination;
    private $answers = [];

    public function __construct(string $title)
    {
        $this->setTitle($title);
    }

    //GETER ET SETER answers
    public function setAnswer(Answer $answer)
    {
        array_push($this->answers, $answer);
    }
    public function getAnswers()
    {
        return $this->answers;
    }

    //GETER ET SETER content
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($variable)
    {
        $this->title = $variable;
    }

    //GETER ET SETER isTrue
    public function getExplaination()
    {
        return $this->explaination;
    }
    public function setExplaination($variable)
    {
        $this->explaination = $variable;
    }

}