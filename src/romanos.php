<?php
public class romanos {

}
public class decimales {
    public function aRomano(decimales n){

       if (n>=1000){
            return "M" . aRomano(n-1000); 
       elseif(n>=900){
            return "CM" . aRomano (n-900);
        }
       elseif (n>=500){
            return "D" . aRomano(n-500);
    }

        elseif (n>=400){
            return "CD" . aRomano (n-400);
    }

        elseif (n>=100){
            return "C" . aRomano(n-100);
    }
        elseif (n>=90){
            return "XC" . aRomano (n-90);
    }
        elseif (n>=50){
            return "L" . aRomano (n-50);
    }
        elseif (n>=40){
            return "XL" . aRomano (n-40);
    }
        elseif (n>=10){
            return "X" . aRomano (n-10);
    }
        elseif (n==9){
            return "IX";
    }
        elseif (n>=5){
            return "V" . aRomano(n-5);
    }
        elseif (n==4){
            return "IV";
    }
        elseif (n<4 && n!=0){
            return "I" . aRomano (n-1);
    }
        else return;
}

?>
