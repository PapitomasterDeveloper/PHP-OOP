<?php

// Class declaration

// Abstract stands for a class that cannot be instantiated

// Also, a class or a method from a class can be abstract if is seeing as a contract to follow or to follow common behavior for the subclasses

abstract class Todo

{

	// Constructor function

	public function __construct($title, $description, $author)

	{

		$this->title = $title;

		$this->description = $description;

		$this->author = $author;

	}

	// Abstract Method, stands for a definition not implemented and can only be implemented by subclasses

	abstract public function changeStatus();

  	// Getters and Setters


	public function getStatus()

  	{

    		return $this->started;

  	}

	public function getDescription()

        {

                return $this->description;

        }

	public function getTitle()

        {

                return $this->title;

        }

	public function getAuthor()

        {

                return $this->author;

        }


	public function setTitle($title)

	{

		$this->title = $title;

	}

	public function setDescription($description)

        {

                $this->description = $description;

        }

	public function setAuthor($author)

        {

                $this->author = $author;

        }

}

// Inheritance by the extends keyword

class Note extends Todo 

{

	protected $timestamp = "";

	protected $priority = "";

	public function __construct($title, $description, $author, $timestamp, $priority)

	{

		$this->title = $title;

		$this->description = $description;

		$this->author = $author;

		$this->timestamp = $timestamp;

		$this->priority = $priority;

	}

	// Inheritance the chanegStatus method of Todo, the subclass implementations overrides the father class definition

	public function changeStatus() {

		$this->started = true;

	}

	public function clear($started, $description, $title, $author, $timestamp, $priority) 
	
	{

		$this->started = false;

		$this->description = "";
		
		$this->title = "";
		
		$this->author = "";
		
		$this->timestamp = "";
		
		$this->priority = "";

	}

	public function setDate($timestamp)

	{

		$this->timestamp = $timestamp;

	}

	public function setPriority($priority)

	{

		$this->priority = $priority;

	}

	public function getDate()

	{

		return $this->timestamp;

	}

	public function getPriority()

	{

		return $this->priority;

	}


}

$note = new Note("New Note", "A note content", "Again by Miguel", "April", "Low");

var_dump($note);

$note->changeStatus();

var_dump($note);

// Instance of the class Todo


?>
