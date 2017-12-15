<?php namespace MW;

class Power
{
	static private $ranges = [100, 80, 60, 40, 20];

	private $currentPower;
	private $maxPower = 700;


	public function __construct (int $currentPower)
	{
		$this->currentPower = (in_array($currentPower, $this->ranges)) ? $currentPower : 100;
	}
	public function __destruct ()
	{
		
	}

	function getCurrentPower() : float
	{
		return (float) ($this->maxPower * ($this->currentPower / 100));
	}
}