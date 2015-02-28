<?php
namespace Razor\Commands;

use Razor\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class CreateOrderCommand extends Command  {

	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}



}
