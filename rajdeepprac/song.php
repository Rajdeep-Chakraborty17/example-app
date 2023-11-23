<?php
class Song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    /**
     * Constructor for Song class.
     *
     * @param string $title   The title of the song.
     * @param string $artist  The artist of the song.
     * @param string $genre   The genre of the song.
     * @param int    $tempo   The tempo of the song in beats per minute.
     */
    public function __construct() {
        $this->title ="" ;
        $this->artist ="" ;
        $this->genre ="" ;
        $this->tempo =0;
    }

    /**
     * Get the title of the song.
     *
     * @return string The title of the song.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the title of the song.
     *
     * @param string $title The title of the song.
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get the artist of the song.
     *
     * @return string The artist of the song.
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Set the artist of the song.
     *
     * @param string $artist The artist of the song.
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Get the genre of the song.
     *
     * @return string The genre of the song.
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Set the genre of the song.
     *
     * @param string $genre The genre of the song.
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * Get the tempo of the song in beats per minute.
     *
     * @return int The tempo of the song in beats per minute.
     */
    public function getTempo() {
        return $this->tempo;
    }

    /**
     * Set the tempo of the song in beats per minute.
     *
     * @param int $tempo The tempo of the song in beats per minute.
     */
    public function setTempo($tempo) {
        if (!is_int($tempo)) {
            throw new InvalidArgumentException('Tempo must be an integer.');
        }
        if ($tempo < 0) {
            throw new InvalidArgumentException('Tempo must be a positive integer.');
        }
        $this->tempo = (int)$tempo;
    }
}

