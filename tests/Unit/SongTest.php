<?php
use PHPUnit\Framework\TestCase;
require(__DIR__.'/../../rajdeepprac/song.php');
use practicals\Song;

class SongTest extends TestCase
{
    public function testSetTempo()
    {
        $song = new Song("Song Title", "Artist Name", "Pop", 120);
        $song->setTempo(120);
        $this->assertSame(120, $song->getTempo());

        

       
    }
}
