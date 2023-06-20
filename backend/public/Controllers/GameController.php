<?php

Class GameController{

    private $_cardMapTemp = [
        0 => ["1","2","3","4","5","6","7","8","9","10","J","Q","K"]
        ,1 =>["1","2","3","4","5","6","7","8","9","10","J","Q","K"]
        ,2 =>["1","2","3","4","5","6","7","8","9","10","J","Q","K"]
        ,3 =>["1","2","3","4","5","6","7","8","9","10","J","Q","K"]
    ];

    private $_cardMap = array();

    /**
     * 手札
     */
    public function start(){

        // カードの柄
        $mark = rand(0,3);

        // カードの数字
        $number = rand(1,13);

        $this->_cardMap[$mark] = array();
        $this->_cardMap[$mark][$number] = 1;
    }

    /**
     * 山札からカード取得
     */
    public function card(){

    }

    /**
     * Bust check
     */
    public function checkBust(){

    }

    /**
     * Hit（カード取得）
     */
    public function hit(){

    }

    /**
     * Surrender(降参)
     */
    public function surrender(){

    }

    public function getCardMap(){
        return $this->_cardMap;
    }
}