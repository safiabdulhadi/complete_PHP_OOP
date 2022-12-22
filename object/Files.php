<?php

class Files{

    function displayContent($filename) : bool{

        $result = true;
        try{
            echo "Read the Content of the file: $filename" . PHP_EOL;
            $content = file_get_contents($filename);
            echo "Displaying Content of the file: $filename" . PHP_EOL;
            echo $content;

        }catch(Exception $e){
            $result = false;

        }
        return $result;
    }
}
$files1 = new Files();
$files1-> displayContent("Test.txt");

 echo "<br>";
// OOP brings reuablility to your code
$files2 = new Files();
$files2-> displayContent("Test1.txt");



?>