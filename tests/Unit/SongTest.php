<?php
use PHPUnit\Framework\TestCase;
require(__DIR__.'/../../rajdeepprac/song.php');
class SongTest extends TestCase
{
    public function testSetTempo()
    {
        $song = new Song();
        $song->setTempo(120);
        $this->assertSame(120, $song->getTempo());

        $song->setTempo('80');
        $this->assertSame(80, $song->getTempo());

        $this->expectException(TypeError::class);
        $song->setTempo(1.5);
    }
}

