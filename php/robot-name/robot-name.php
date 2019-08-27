<?php


class Robot {

    private $name = '';
    public static $used_names = [];
    
    private function setSeed() : void
    {
        list($usec, $sec) = explode(' ', microtime());
        srand($sec + $usec * 1000000);
    }

    private function assertNotUsed($name) : bool
    {
        return in_array($name, self::$used_names);
    }
    
    private function setName() : void
    {
        do{
            $this->setSeed();
            $this->name = $this->getRandomName();
        }while($this->assertNotUsed($this->name));

        self::$used_names[] = $this->name; 
    }

    private function hasName() : bool
    {
        return strlen($this->name) > 0;
    }

    private function getRandomName() : string
    {   
        return chr(rand(65,90)).chr(rand(65,90)).rand(100,999);
    }

    public function getName() : string
    {   
        if(!$this->hasName()){
            $this->setName();
        }
        return $this->name;
    }

    public function reset() : void
    {
        $this->setName();
    }

}