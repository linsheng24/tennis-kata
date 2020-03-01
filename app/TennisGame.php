<?php
namespace App;

class TennisGame
{

  public function getGameScore($p1_score, $p2_score)
  {
    if ($p1_score == 0 && $p2_score == 0) {
      return 'Love-All';
    }

    if ($p1_score == 1 && $p2_score == 0) {
      return 'Fifteen-Love';
    }

    if ($p1_score == 1 && $p2_score == 2) {
      return 'Fifteen-Thirty';
    }
  }

}