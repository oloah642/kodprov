<?php


class Dealer
{
    public $hand = [];
    public $cardSum;

    public function __construct($deck)
    {
//        Kortleken som ges till Dealer.php av Deck.php
        $this->deck = $deck;
    }


    public function deal()
    {
        //    Kortleken blandas genom at funktionen shuffleCards() körs
        $this->shuffleCards();
        //    Kort dras tills summan av dess värde är över 16
        for ($i = 0; $this->cardSum <= 16; $i++) {
//          Kort ges till handen genom funktionen dealCard().
//          Kortet som ges till handen  har tagits ur arrayen deck[] med fuktionen drawCard()
            $this->dealCard($this->drawCard());
//          Efter varje kort har dragits och givits till handen kollas om kriteriet för blackjack har uppfyllts med fuktionen blackjackCheck().
            $this->blackjackCheck($i);

        }
    }
//    Returnerar summan av korten
    public function getCardSum(){
        return $this->cardSum;
    }
//    Returnerar alla kort på handen
    public function getHand()
    {
        return $this->hand;
    }

//    Arrayen med kort blandas
    private function shuffleCards()
    {
        shuffle($this->deck);
    }

//    Funktionen returnerar det sista kortet ur den blandade arrayen innehållande kort
    private function drawCard()
    {
        return $card = array_pop($this->deck);
    }

//    Funktionen lägger till kortet som dragits i handen och kallar på addSum() för att räkna summan av korten
    private function dealCard($card)
    {
        array_push($this->hand, $card);
        $this->addSum($card);
    }

//    Funktionen lägger ihop summan av de kort som redan dragits och det aktuella kortet.
    private function addSum($card)
    {
        $this->cardSum = $card[0] + $this->cardSum;
    }

//    Funktionen kollar om kriteriet för blackjack har uppfyllts d.v.s. kolla om 2 kort har dragits och om summan är 21.
    private function blackjackCheck($i)
    {
        if ($this->cardSum == 21 && $i == 1) {
            echo "Blackjack!";
        }
    }
}
