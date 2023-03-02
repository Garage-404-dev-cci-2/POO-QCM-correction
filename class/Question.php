<?php 
class Question 
{
    private $id;
    private $title;
    private $explaination;
    private $answers = [];

    public function __construct(array $data)
    {
        $this->setId($data['id']);
        $this->setTitle($data['title']);
        $this->setExplaination($data['explaination']);
    }

    //GETTER ET SETTER answers
    public function setAnswer(Answer $answer)
    {
        array_push($this->answers, $answer);
    }
    public function getAnswers()
    {
        return $this->answers;
    }

    //GETTER ET SETTER content
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($variable)
    {
        $this->title = $variable;
    }

    //GETTER ET SETTER isTrue
    public function getExplaination()
    {
        return $this->explaination;
    }
    public function setExplaination($variable)
    {
        $this->explaination = $variable;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}