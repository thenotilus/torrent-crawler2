<?php

class	Torrent
{

    private		$name;
    private		$seeders;
    private		$leechers;
    private		$date;
    private		$size;
    private		$magnet_link;

    public function __construct($name, $seeders, $leechers, $date, $size, $magnet_link)
    {
        $this->name        = $name;
        $this->seeders     = $seeders;
        $this->leechers    = $leechers;
        $this->date        = $date;
        $this->size        = $size;
        $this->magnet_link = $magnet_link;
    }
}

?>
