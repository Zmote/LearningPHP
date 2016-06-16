<?php
$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]->title . "<br>";
echo $xml->book[1]->title . "<br><br>";

foreach($xml as $book){
    echo $book->title . ", ";
    echo $book->author . ", ";
    echo $book->year . ", ";
    echo $book->price . "<br>";
}
echo "<br>";
echo $xml->book[0]['category'] . "<br>";
echo $xml->book[1]->title['lang'];
echo "<br><br>";

foreach($xml->children() as $books){
    echo $books->title['lang'];
    echo "<br>";
}

