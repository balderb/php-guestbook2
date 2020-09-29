<?php

class Post

{
    private $title;
    private $date;
    private $content;
    private $authorName;

    // getters and setters for the class properties

    public function getTitle(){
        return $this->$title;
    }

    public function setTitle(){
        return $this->$title;
    }

    public function getDate(){
        return $this->$date;
    }

    public function setDate(){
        return $this->$date;
    }
    
    public function getContent(){
        return $this->$content;
    }

    public function setContent(){
        return $this->$content;
    }

    public function getAuthorName(){
        return $this->$authorName;
    }

    public function setAuthorName(){
        return $this->$authorName;
    }

    // other functions inside post class



}