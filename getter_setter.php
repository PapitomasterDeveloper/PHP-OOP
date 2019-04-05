<?php

// Class declaration

class Todo

{

	// Properties declaration

	public $started = false;

	public $title = "";

	public $description = "";

	public $author = "";

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

// Instance of the class Todo

$todo = new Todo("First", "Do something", "Miguel");

var_dump($todo);

echo("getAuthor output: \n");

var_dump($todo->getAuthor());

$todo->setAuthor("Miguel Angel Cavazos Reyes");

echo("Instance output:\n");

var_dump($todo);

?>
