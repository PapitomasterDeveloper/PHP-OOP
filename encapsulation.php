<?php

// Class declaration

class Todo

{

	// Properties declaration

	private $started = false;

	private $title = "";

	private $description = "";

	private $author = "";

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

echo("There are 3 types of abstraction: \n\nPublic, Private and Protected.\n\n");

echo("Public let us use the declaration from anywhere by anyone. \n\n");

echo("Protected let us use the declaration only by extending the class into subclasses(childs/subclasses).\n\n");

echo("Private let us use the declaration exclusively in the class context, it doesn't work with subclasses.\n\n");

$todo = new Todo("First", "Do something", "Miguel");

var_dump($todo);

echo("getAuthor output: \n");

var_dump($todo->getAuthor());

$todo->setAuthor("Miguel Angel Cavazos Reyes");

echo("Instance output:\n");

var_dump($todo);

?>
