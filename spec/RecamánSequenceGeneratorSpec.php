<?php

namespace spec\danmurf\RecamánSequence;

use danmurf\RecamánSequence\RecamánSequenceGenerator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RecamánSequenceGeneratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RecamánSequenceGenerator::class);
    }
}
