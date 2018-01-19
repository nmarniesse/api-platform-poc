<?php

namespace App\Entity;

class Book
{
	/**
	 * @var string
	 */
	public $id;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @param string $id
	 * @param string $name
	 */
	public function __construct(string $id, string $name)
	{
		$this->id   = $id;
		$this->name = $name;
	}
}
