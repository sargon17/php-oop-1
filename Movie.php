<?php

class Movie
{
  private $title;
  private $year;
  private $rating;
  private $poster;
  private $votes;
  private $id;

  public function __construct($title, $year, $poster, $votes, $id)
  {
    $this->title = $title;
    $this->year = $year;
    $this->poster = $poster;
    $this->votes = $votes;
    $this->id = $id;
  }

  public function calcRating()
  {
    $this->rating = array_sum($this->votes) / count($this->votes);
  }
}

?>
