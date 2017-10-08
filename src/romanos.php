<?php
namespace romanos;
use PHPUnit\Framework\TestCase;

class decimales {
	public $n;
	protected $aux;
	function __construct($numero)
	{
		$this->n=$numero;
	}
public function aRomano(){
	$this->aux = $this->n;
       if ($this->n >= 1000){
		    $this->n-=1000;
            return "M" . $this->aRomano();
	   }
       elseif($this->n >=900){
		    $this->n-=900;
            return "CM" . $this->aRomano ();
        }
       elseif ($this->n >=500){
		    $this->n-=500;
            return "D" . $this->aRomano();
    }
        elseif ($this->n >= 400){
			$this->n-=400;
            return "CD" . $this->aRomano ();
    }
        elseif ($this->n >= 100){
			$this->n-=100;
            return "C" . $this->aRomano();
    }
        elseif ($this->n >= 90){
			$this->n-=90;
            return "XC" . $this->aRomano ();
    }
        elseif ($this->n >= 50){
			$this->n-=50;
            return "L" . $this->aRomano ();
    }
        elseif ($this->n >= 40){
			$this->n-=40;
            return "XL" . $this->aRomano ();
    }
        elseif ($this->n >= 10){
			$this->n-=10;
            return "X" . $this->aRomano ();
    }
        elseif ($this->n == 9){
			$this->n-=9;
		$this->n = $this->aux;
            return "IX";
    }
        elseif ($this->n >= 5){
			$this->n-=5;
            return "V" . $this->aRomano();
    }
        elseif ($this->n == 4){
			$this->n-=4;
		$this->n = $this->aux;
            return "IV";
    }
        elseif ($this->n <4 && $this->n != 0){
			$this->n-=1;
            return "I" . $this->aRomano ();
    }
	$this->n = $this->aux;
        else return;
}
}

