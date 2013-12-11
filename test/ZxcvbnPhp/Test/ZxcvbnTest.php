<?php

namespace ZxcvbnPhp\Test;

use ZxcvbnPhp\Zxcvbn;

class ZxcvbnTest extends \PHPUnit_Framework_TestCase
{

    public function testZxcvbn()
    {
        $result = Zxcvbn::passwordStrength("");
        $this->assertEquals(0, $result['entropy'], "Entropy incorrect");
        $this->assertEquals(0, $result['score'], "Entropy incorrect");
    }
}