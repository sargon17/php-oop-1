<?php

class Movie
{
  private $title;
  private $year;
  private $rating;
  private $poster;
  private $votes;

  public function __construct($title, $year, $poster, $votes)
  {
    $this->title = $title;
    $this->year = $year;
    $this->poster = $poster;
    $this->votes = $votes;
  }

  public function getTitle()
  {
    return $this->title;
  }
  public function getYear()
  {
    return $this->year;
  }
  public function getPoster()
  {
    return $this->poster;
  }
  public function getRating()
  {
    $this->calcRating();
    return $this->rating;
  }
  public function getCard()
  {
    $this->calcRating();
    $card = "<div class='card'>";
    $card .= "<img src='$this->poster' alt='$this->title' class='poster'>";
    $card .= "<h2>$this->title</h2>";
    $card .= "<h3>$this->year</h3>";
    $card .= "<h3>$this->rating</h3>";
    $card .= "</div>";
    return $card;
  }

  private function calcRating()
  {
    $this->rating = array_sum($this->votes) / count($this->votes);
  }
}

?>
