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

    public function it_returns_a_generator_when_invoked()
    {
        $this->__invoke()->shouldReturnAnInstanceOf(\Generator::class);
    }
}
