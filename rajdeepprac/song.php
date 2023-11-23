<?php
namespace Practicals;
class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter for title
    public function getTitle() {
        return $this->title;
    }

    // Setter for title
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter for artist
    public function getArtist() {
        return $this->artist;
    }

    // Setter for artist
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter for genre
    public function getGenre() {
        return $this->genre;
    }

    // Setter for genre
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter for tempo
    public function getTempo() {
        return $this->tempo;
    }

    // Setter for tempo
    public function setTempo($tempo) {
//        $this->tempo = $tempo;
    }
}
/* Example usage
$mySong = new Song("Song Title", "Artist Name", "Pop", 120);
echo "Title: " . $mySong->getTitle() . "\n";
echo "Artist: " . $mySong->getArtist() . "\n";
echo "Genre: " . $mySong->getGenre() . "\n";
echo "Tempo: " . $mySong->getTempo() . "\n";

// Update the tempo
$mySong->setTempo(140);
echo "Updated Tempo: " . $mySong->getTempo() . "\n";
*/
?>