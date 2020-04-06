<?php
class Band{
	public $text;
	public $length;
	private $counter = -1;

	public function __construct(string $text, int $length){
		$this->text = $text;
		$this->length = $length;
	}

	public function next(): string{
		if($this->counter >= strlen($this->text)){
			$this->counter = -1;
		}
		return substr(str_repeat($this->text . " ", 2), ++$this->counter, $this->length);
	}
}
/* TEST
function send(string $text){
	$class = new Band($text, 8);
	while(true){
		echo "      | " . $class->next() . PHP_EOL . PHP_EOL;
		usleep(200000);
	}
}

send("Bu canlı bir yazıdır ve kayar.");
*/
