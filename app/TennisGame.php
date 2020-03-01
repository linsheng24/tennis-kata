<?php
namespace App;

class TennisGame
{

  public function getGameScore($p1_score, $p2_score)
  {
 
    if ($p1_score == $p2_score) {
      return $this->getTextFromScore($p1_score) . '-All';
    }

    return $this->getTextFromScore($p1_score) . '-' . $this->getTextFromScore($p2_score);


  }

  private function getTextFromScore($score)
  {
    switch ($score) {
      case 0:
        $result = 'Love';
        break;
      case 1:
        $result = 'Fifteen';
        break;
      case 2:
        $result = 'Thirty';
        break;
      case 3:
        $result = 'Forty';
        break;
    }
    return $result;
  }

}