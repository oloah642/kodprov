<?php


class Deck
{
    protected $cards;

    public function __construct(int $nrOfDecks)
    {
        for ($decksCreated = 0; $decksCreated < $nrOfDecks; $decksCreated++) {
            $this->populate('Hjärter');
            $this->populate('Spader');
            $this->populate('Ruter');
            $this->populate('Klöver');
//            var_dump($this->cards);
        }
    }

    protected function populate(string $deckName)
    {
        for($i = 2; $i < 11; $i++)
        {
            $this->cards[] = [$i,"$deckName $i"];
        }
        $this->cards[] = [10,"$deckName knekt"];
        $this->cards[] = [10,"$deckName dam"];
        $this->cards[] = [10,"$deckName kung"];
        $this->cards[] = [11,"$deckName ess"];
    }

    public function getJSON()
    {
        return json_encode($this->cards);
    }

    public function getCards()
    {
        return $this->cards;
    }

}