<?php

// Class declaration

class Todo

{

	// Properties declaration

	protected $started = false;

	protected $title = "";

	protected $description = "";

	protected $author = "";

	// Constructor function

	public function __construct($title, $description, $author)

	{

		$this->title = $title;

		$this->description = $description;

		$this->author = $author;

	}

	// Method

	public function changeStatus()

	{

		$this->started = true;

	}

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

class Note extends Todo 

{

	protected $timestamp = "";

	protected $priority = "";

	public function __construct($timestamp, $priority)

	{

		$this->timestamp = $timestamp;

		$this->priority = $priority;

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

// Instance of the class Todo


?>
