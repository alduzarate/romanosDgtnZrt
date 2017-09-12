<?php
abstract public class romanos {

}
public class decimales {
	public $n;
	
	function __construct($numero)
	{
		$this->n=$numero;
	}
    public function aRomano(){

       if ($this->n >= 1000){
            return "M" . aRomano($this->n - 1000); 
       elseif($this->n >=900){
            return "CM" . aRomano ($this->n - 900);
        }
       elseif ($this->n >=500){
            return "D" . aRomano($this->n - 500);
    }

        elseif ($this->n >= 400){
            return "CD" . aRomano ($this->n - 400);
    }

        elseif ($this->n >= 100){
            return "C" . aRomano($this->n - 100);
    }
        elseif ($this->n >= 90){
            return "XC" . aRomano ($this->n - 90);
    }
        elseif ($this->n >= 50){
            return "L" . aRomano ($this->n - 50);
    }
        elseif ($this->n >= 40){
            return "XL" . aRomano ($this->n - 40);
    }
        elseif ($this->n >= 10){
            return "X" . aRomano ($this->n - 10);
    }
        elseif ($this->n == 9){
            return "IX";
    }
        elseif ($this->n >= 5){
            return "V" . aRomano($this->n - 5);
    }
        elseif ($this->n == 4){
            return "IV";
    }
        elseif ($this->n <4 && $this->n != 0){
            return "I" . aRomano ($this->n - 1);
    }
        else return;
}
	}
}
$cinco= new decimales(5);
print $cinco->aRomano();

?>
