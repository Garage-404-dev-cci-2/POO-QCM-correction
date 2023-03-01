<?php
class Answer 
{
    private $content;
    private $isTrue;

    public function __construct(string $content , bool $isTrue = false)
    {
        $this->setIsTrue($isTrue);
        $this->setContent($content);
        
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

}