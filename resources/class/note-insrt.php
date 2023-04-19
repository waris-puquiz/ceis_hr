<?php
class insert extends config{
    public $note;

    public function __construct($note){
        $this->note=$note;
    }
    public function insertnote(){
        $con = $this->con();
        $sql = "INSERT INTO `note_tbl`(`note`) VALUES (`$this->note`)";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;

        }else{
            return false;
        }
    }
}
?>