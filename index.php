<?php

class Movie{
    public $director;
    public $title;

    function __construct($_director){
        $this ->director = $_director;
        
    }

    public function setTitle($year){
        if($year>1993){
            $this->title = 'Film Bianco';
        }else{
            $this->title = 'Film Blu';
        }
    }

    public function getTitle(){
        return $this->title;
    }
}

$filmBlu = new Movie('Kieślowski');
$filmBianco = new Movie('Kieślowski');

$filmBlu->setTitle(1993);
$filmBianco->setTitle(1994);


echo $filmBlu->getTitle() . ', regia di ' . $filmBlu -> director .'<br>';
echo $filmBianco->getTitle() . ', regia di ' . $filmBianco -> director;

   



?>