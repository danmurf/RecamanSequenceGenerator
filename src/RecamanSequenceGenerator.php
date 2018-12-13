<?php

namespace danmurf\RecamanSequence;

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
            if ($backwardNumber >= 0 && !\in_array($backwardNumber, $this->numbersYielded)) {
                yield $backwardNumber;
                $this->numbersYielded[] = $backwardNumber;
                ++$this->hops;
                $this->position = $backwardNumber;
            } else {
                $forwardNumber = $this->position + $this->hops;
                yield $forwardNumber;
                $this->numbersYielded[] = $forwardNumber;

                ++$this->hops;
                $this->position = $forwardNumber;
            }
        } while (true);
    }
}
