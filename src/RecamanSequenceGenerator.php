<?php

namespace danmurf\RecamanSequence;

use in_array;

class RecamanSequenceGenerator
{
    /** @var int */
    private $position = 0;

    /** @var int */
    private $hops = 0;

    /** @var array */
    private $numbersYielded = [];

    public function __invoke(): \Generator
    {
        do {
            $backwardNumber = $this->position - $this->hops;
            if ($backwardNumber >= 0 && !in_array($backwardNumber, $this->numbersYielded)) {
                yield $backwardNumber;
                $this->registerPosition($backwardNumber);
            } else {
                $forwardNumber = $this->position + $this->hops;
                yield $forwardNumber;
                $this->registerPosition($forwardNumber);
            }
        } while (true);
    }

    private function registerPosition(int $position): void
    {
        $this->position = $position;
        $this->numbersYielded[] = $position;
        ++$this->hops;
    }
}
