<?php namespace MW;

class Tempo
{
	protected $timer = 0; 

	function __construct(int $timer)
	{
		$this->timer = $timer;
	}

	function __destruct()
	{

	}

	function getTimer() : int
	{
		return $this->timer;
	}

	function setTimer(int $timer)
	{
		$this->timer = $timer;
	}

	function addTime(int $time)
	{
		$this->timer += $time;
	}
	function substractTime(int $time)
	{
		if($this->timer - $time <= 0)
			$this->timer = 0;

		$this->timer -= $time;
	}
}