<?php

namespace spec\danmurf\RecamanSequence;

use danmurf\RecamanSequence\RecamanSequenceGenerator;
use PhpSpec\ObjectBehavior;

class RecamanSequenceGeneratorSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(RecamanSequenceGenerator::class);
    }
}
