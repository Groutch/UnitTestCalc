<?php
class Calculator {
    
    public function calculate($param='0'){
        return ($param==null) ? '0' : eval("return ".$param.";");
    }
}