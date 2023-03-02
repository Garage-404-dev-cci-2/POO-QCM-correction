<?php
class Answer 
{
    private $id;
    private $content;
    private $isTrue;
    private $questionId;

    public function __construct(array $data)
    {
        $this->setId($data["id"]);
        $this->setContent($data["content"]);
        $this->setIsTrue($data["is_true"]);
        $this->setQuestionId($data["question_id"]);
        
    }

    //GETER ET SETER content
    public function getContent()
    {
        return $this->content;
    }
    public function setContent($variable)
    {
        $this->content = $variable;
    }

    //GETER ET SETER isTrue
    public function getIsTrue()
    {
        return $this->isTrue;
    }
    public function setIsTrue($variable)
    {
        $this->isTrue = $variable;
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

    /**
     * Get the value of questionId
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set the value of questionId
     */
    public function setQuestionId($questionId): self
    {
        $this->questionId = $questionId;

        return $this;
    }
}