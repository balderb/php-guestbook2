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

    public function setTitle($title){
        return $this->$title;
    }

    public function getDate(){
        return $this->$date;
    }

    public function setDate($date){
        return $this->$date;
    }

    public function getContent(){
        return $this->$content;
    }

    public function setContent($content){
        return $this->$content;
    }

    public function getAuthorName(){
        return $this->$authorName;
    }

    public function setAuthorName($authorName){
        return $this->$authorName;
    }

    // adding constructor
    function __construct()
    {

    }

    // other functions inside post class






}