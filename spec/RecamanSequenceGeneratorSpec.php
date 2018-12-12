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

    public function it_yields_numbers_in_the_racaman_sequence_when_invoked()
    {
        $racamanSequence = [0, 1, 3, 6, 2, 7, 13, 20, 12, 21, 11, 22, 10, 23, 9, 24, 8, 25, 43, 62, 42, 63, 41, 18, 42, 17, 43, 16, 44, 15, 45, 14, 46, 79, 113, 78, 114, 77, 39, 78, 38, 79, 37, 80, 36, 81, 35, 82, 34, 83, 33, 84, 32, 85, 31, 86, 30, 87, 29, 88, 28, 89, 27, 90, 26, 91, 157, 224, 156, 225, 155];

        foreach ($racamanSequence as $key => $value) {
            $this->__invoke()->shouldHaveKeyWithValue($key, $racamanSequence[$key]);
        }
    }
}
