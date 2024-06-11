<?php
declare(strict_types=1);

class ListenList {
    public array $music = [];

    // Method to add a Music object to the array
    public function addMusic(Music $music): void {
        $this->music[] = $music;
    }

    // Method to display the list of music
    public function displayList(): void {
        foreach ($this->music as $music) {
            echo $music->display() . "<br>";
        }
    }
}
?>
