<?php
class genero{
    public function oa($oa)
    {
        if ($oa == "F") {
            echo  "a";
        } 
        elseif($oa == "M") {
            echo  "o";
        } else {
            echo  "o(a)";
        }
    
    }
    public function oax($oa)
    {
        if ($oa == "Feminino") {
            echo  "a";
        } 
        elseif ($oa == "Masculino") {
            echo  "o";
        } else {
            echo  "o(a)";
        }
    
    }
    public function ora($ora)
    {
        if ($ora == "F") {
            echo "ra";
        } 
        elseif($ora == "M") {
            echo "r";
        } else {
            echo  "r(a)";
        }
       
    }

    public function orax($ora)
    {
        if ($ora == "Feminino") {
            echo "ra";
        } 
        elseif($ora == "Masculino") {
            echo "r";
        } else {
            echo  "r(a)";
        }
       
    }

}
$genero = new genero();
?>