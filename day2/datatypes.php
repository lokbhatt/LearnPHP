<?php
echo "There are following types of datatypes include in PHP:\n";
echo "
  <ul>
     <li> String</li>
     <li> Integer</li>
     <li> Float</li>
     <li> Boolean</li>
     <li> Array</li>
     <li> Object</li>
     <li> Null</li>
     <li> Resource</li>
";
?>
<p>to get datatype of valiable we need to use var_dump() function</p>

<?php
$a = 5;
var_dump($a);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>
<br><br>
<p>there is three types of scope in PHP</p>
<ul>
    <li>local</li>
    <li>global</li>
    <li>static</li>
</ul>
<?php
echo "Global Scope: <br>";
$x = 5; // global scope

function globalTest()
{
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
globalTest();

echo "<p>Variable x outside function is: $x</p><br><br>";


function localTest() {
  $y = 5; // local scope
  echo "<p>Variable x inside function is: $y</p>";
}
localTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $y</p>";
?>
<br><br>
<p>global keyword is used to access global variable within a funcction.</p>
<?php
    $a = 2;
    $b = 3;
    function scopeCheck(){
        global $a, $b, $c;
        $c = $a+$b;
    }
    scopeCheck();
    echo "Using global keyword c=".$c;
?>

<p>
    PHP also store all Global variables in an array called $GLOBALS[index]. <br>
    Here index can hold name of variable. This array is also accessible within functions. <br>
    And can be used to update global veriable directly.
</p>

<?php 
    $c = 6;
    $d = 7;
    function globleVarTest(){
        $GLOBALS['c'] = $GLOBALS['c']+$GLOBALS['d'];
    }
    globleVarTest();
    echo "Now using GLOBALS['index']: ".$c;
?>
<br><br>
<p>
    the static keyword: <br>
    when function completed/executed then all of its variables are deleted, <br>
    sometimes we don't want delete local variable, we need it for further job. <br>
    So we need to use static keyword, when first decleare the variable.
</p>
<?php 
    function myFun(){
        static $f= 0;
        echo $f;
        $f++;
    }
    echo "when call the myFun() function it should be inrement sequentially: ";
    myFun();
    myFun();
    myFun();
    myFun();
    myFun();

    echo '<br>';
    print('hello this is php day two excercise.<br>');
    echo('now finish today.');
?>