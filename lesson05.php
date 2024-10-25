<?php

interface Media {
    public function play();
}

class Music implements Media {
    private $songTitle;

    public function __construct($songTitle) {
        $this->songTitle = $songTitle;
    }

    public function play() {
        return "[{$this->songTitle}]を再生中";
    }
}

class Video implements Media {
    private $videoTitle;

    public function __construct($videoTitle) {
        $this->videoTitle = $videoTitle;
    }

    public function play() {
        return "[{$this->videoTitle}]を再生中";
    }
}

class Podcast implements Media {
    private $episodeTitle;

    public function __construct($episodeTitle) {
        $this->episodeTitle = $episodeTitle;
    }

    public function play() {
        return "ポッドキャストの[{$this->episodeTitle}]を再生中";
    }
}
