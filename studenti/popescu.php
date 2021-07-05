<?php

class Popescu extends Student{
    public function _construct(){
        parent::_construct();//constructorul
        $this->nume="Popescu";
    }
    public function set_prenume($var){
        parent::set_prenume($var);
    }
    public function show_prenume(){
        echo $this->prenume;
    }
    public function show_nume(){
        echo $this->nume;
    }
}

