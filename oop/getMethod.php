<?php
class getMethod{
    private $data = ["name"=>"Dipto","course"=>"php","fee"=>"2000"];
    public function get($property){
        return "You are trying to access Non Existing or Private property($this->data[$property])";
    }
}
