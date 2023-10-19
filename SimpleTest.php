<?php 
use PHPUnit\Framework\TestCase; //kayak buat ngimpor kelas testcase dari framework phpunit

require_once "WordCount.php"; //kayak buat iclude dari kelas wordcount
class SimpleTest extends TestCase{ //class simpletest itu turunan
    public function testCountWords(){
        $Wc = new Wordcount();
        $TestSentence = "My name is Audrey";
        $Wordcount = $Wc->countWords($TestSentence);//objek ndek wc itu dipanggil argumen testsentence disimpan di countword
        $this->assertEquals(2, $Wordcount);
    }
}
?>