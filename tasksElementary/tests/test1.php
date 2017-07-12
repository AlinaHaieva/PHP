<?php

use PHPUnit\Framework\TestCase;

class ChessTest extends TestCase {
  public function createChessBoardTest() {
    $chessTest = new Chess();
    $this->assertEquals(string,$chessTest->createChessBoard(6,4,"*"));
  }
}

?>
