<?php

class Tempo
{
	protected $timer = 0; 

	function __construct(float $timer)
	{
		$this->timer = $timer;
	}

	function __destruct()
	{

	}

	function getTimer()
	{
		return $this->timer;
	}

	function setTimer($timer)
	{
		$this->timer = $timer;
	}
}