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

		$this->title = "";

		$this->description = "";

		$this->author = "";

	}

	public function status()

	{

		$this->started = true;

	}

}

// Instance of the class Todo

$todo = new Todo("First", "Do something", "Miguel");

// Calling the method from his instance to change a property

var_dump($todo->started);

$todo->status();

var_dump($todo->started);

var_dump($todo);

?>
