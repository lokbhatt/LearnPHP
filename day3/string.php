<?php 
 echo "to count word in string we can use str_word_count() method.\n";

 $a= "hello string how are you"; 
 $b= str_word_count($a);
 echo $b;
 echo "humm.\n";
 echo "to search specific word in string we can use strpos() function.\n";
 echo strpos("Hello! world!", "world").'     ';

 echo "yes\n";
 echo "To replace string we must use str_replace() function.\n";
 echo str_replace("hello", "Lokesh", $a);
?>
<br>
<h3>now telling about slicing:</h3>
<p>
    We can return range of character by using the substr() function. <br>
    specify the start index and number of characters you want to return.
</p>
<br>
<?php
    $ax= "hello Lokesh";
    echo substr($ax, 5, 7);// start the slice at index 5 and after that the word is 7 character long.
?>

<p>escape character: to insert character that are illegal in a string.</p>
