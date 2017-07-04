<?php

namespace Phpactor\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Phpactor\Phpactor;

class PhpactorTest extends TestCase
{
    /**
     * @testdox It returns true if the subject looks like a file.
     * @dataProvider provideIsFile
     */
    public function testIsFile(string $example, bool $isFile)
    {
        $this->assertEquals($isFile, Phpactor::isFile($example));
    }

    public function provideIsFile()
    {
        return [
            [
                'Hello.php',
                true
            ],
            [
                'Hello\\Bar',
                false
            ],
            [
                'Hello',
                false
            ],
            [
                './Hello/Bar',
                true
            ],
            [
                'Foobar/*',
                true
            ],
            [
                'lib/Badger.php',
                true
            ]
        ];
    }
}
