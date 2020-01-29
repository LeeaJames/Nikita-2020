<?php  

class Form {

    private $action;
    private $method;
    private $class;
    private $type;
    private $value;


    public function __construct($action = 'process.php', $method = 'post', $class = 'form') {
        echo "<form action='$action' method='$method' class='$class'>";
    }
    
    public function addInput($type, $value) {
        echo "<input type='$type' name='' placeholder='' value='$value' />";
    }

    public function label($for, $value) {
        echo "<label for='$for'>$value</label>";
    }

    public function addSubmit($value) {
        echo "<input type='submit' value='$value' />";
    }

    public function endForm() {
        echo "</form>";
    }
    
}

?>