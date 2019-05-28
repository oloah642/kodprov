<?php
require "Deck.php";
require "Dealer.php";

//Kort hämtas från klassen Deck.php
$Deck = new Deck(1);
//Korten ges till klassen Dealer.php med hjälp av funktionen getCards() som finns i Deck.php
$Dealer = new Dealer($Deck -> getCards());

//Funktionen deal i klassen Dealer.php kallas på för att utföra programmets uppgift
$Dealer->deal();
//Visar summan av korten
echo "<br>Summan av dina kort: ". $Dealer->getCardSum();
//Visar de kort som finns i handen
var_dump($Dealer->getHand());

