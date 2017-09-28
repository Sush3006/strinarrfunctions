<?php


  $obj = new main();
  $text = "Hey There!!";
 $arr = array('Hello','World!','Beautiful');
$cars=array("Volvo","BMW","Toyota");
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a3=array("red","green");
$a4=array("blue","yellow");
  $obj->printthis($text);
$obj->strrigtrim($text);
$obj->stngexp($text);
$obj->stngchop($text);
$obj->chunksplit($text);
$obj->addclash($text);
$obj->count_words($text);
$obj->count_char($text);
$obj->Implodestr($arr);
$obj->joins($arr);
$obj->printarr($cars);
$obj->printarrchk($cars);
$obj->printarrcom($cars,$arr);
$obj->printarrfill($cars);
$obj->printarrflip($a1);
$obj->printarrflip($a1);
$obj->printarrmerge($a3,$a4);
$obj->printarrpad($a3);
$obj->printarrpop($a3);
$obj->printarrpush($a3);
$obj->printarrrep($a1,$a2);

 
  class main {

    public function printthis($text) {
      
      echo '<h1>1. string print </h1>';
      echo $text;
      echo '<hr>';
    }
 public function strrigtrim($text) {
      
      echo '<h1>2. string right Trim</h1>';
      echo rtrim($text,"There");
      echo '<hr>';
    }
public function stngexp($text) {
      
      echo '<h1>3.String Explode</h1>';
      print_r (explode(" ",$text));
      echo '<hr>';
    }
public function stngchop($text) {
      
      echo '<h1>4.String Chop</h1>';
      echo $text . "<br>";
echo chop($text,"There!");
      echo '<hr>';
    }
	  public function chunksplit($text) {
      
      echo '<h1>5.Chunk Split</h1>';
		    echo $text . "<br>";
     echo chunk_split($text,1,".");
      echo '<hr>';
    }
      public function addclash($text) {
      
      echo '<h1>6.Adding clashes Function</h1>';
		    echo $text . "<br>";
    echo addcslashes($text,"T");
	
      echo '<hr>';
    }
	   public function count_words($text){
      
      echo '<h1>7.Count no: of words</h1>';
		    echo $text . "<br>";
   echo str_word_count($text);
	 echo '<hr>';
    }
      public function count_char($text){
      
      echo '<h1>8.Count Chars</h1>';
		    echo $text . "<br>";
  	 echo count_chars($text,3);
	 echo '<hr>';
    }
	  public function Implodestr($arr){
      
      echo '<h1>9.Implode function</h1>';
		    print_r($arr) . "<br>";
		     echo implode(" ",$arr);
	           echo '<hr>';
    }
      public function joins($arr){
      
      echo '<h1>10. Join </h1>';
		    print_r($arr) . "<br>";
		    echo join(" ",$arr);
	           echo '<hr>';
    }
	  
      public function printarr($cars){
      
      echo '<h1>1.array print</h1>';
		    print_r($cars) . "<br>";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
	           echo '<hr>';
    }
	    public function printarrchk($cars){
      
      echo '<h1>2.array chunk</h1>';
		    print_r($cars) . "<br>";
print_r(array_chunk($cars,2));
	           echo '<hr>';
    }
	  
	    public function printarrcom($cars,$arr){
      
      echo '<h1>3.array combine</h1>';
		    print_r($cars) . "<br>";
			print_r($arr) . "<br>";

			$c=array_combine($cars,$arr);
			print_r($c);
	           echo '<hr>';
    }
	  public function printarrfill($cars){
      
      echo '<h1>4.array fill</h1>';
		    print_r($cars) . "<br>";
	$a1=array_fill(3,4,"blue");
	print_r($a1);
	           echo '<hr>';
    }
	  public function printarrflip($a1){
      
      echo '<h1>5.array flip</h1>';
		    print_r($a1) . "<br>";
$result=array_flip($a1);
print_r($result);
	           echo '<hr>';
    }
	   public function printarrmerge($a3,$a4){
      
      echo '<h1>6.array merge</h1>';
		    print_r($a3) . "<br>";
		   print_r($a4) . "<br>";

print_r(array_merge($a3,$a4));
	           echo '<hr>';
    }
 public function printarrpad($a3){
      
      echo '<h1>7.array pad</h1>';
		    print_r($a3) . "<br>";
print_r(array_pad($a3,5,"blue"));
	           echo '<hr>';
    }
	  public function printarrpop($a3){
      
      echo '<h1>8.array pop</h1>';
		    print_r($a3) . "<br>";

array_pop($a3);
print_r($a3);
	           echo '<hr>';
    }
	  public function printarrpush($a3){
      
      echo '<h1>9.array push</h1>';
		    print_r($a3) . "<br>";
array_push($a3,"blue","yellow");
print_r($a3);
	           echo '<hr>';
    }
	  public function printarrrep($a1,$a2){
      
      echo '<h1>10.array replace</h1>';
		    print_r($a1) . "<br>";
		  print_r($a2) . "<br>";
print_r(array_replace($a1,$a2));
	           echo '<hr>';
    }
  }
