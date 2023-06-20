<?php

Class DataBaseController{

    private $__dbObj = null;

    /**
     * Database 接続
     */
    public function openDataBase(){

        // DB接続Object作成
        $dsn = 'mysql:dbname=jin;host=db';
        $user = 'root';
        $password = 'just1nnext';
        
        try{
            $this->__dbObj = new PDO($dsn, $user, $password);
        }catch (PDOException $e){
            throw new Exception('Error:'.$e->getMessage());
        }
        
        return ;
    }

    /**
     * Database 切断
     */
    public function closeDataBase(){
        $this->__dbObj = null;
    }

    /**
     * Select
     */
    public function execSelectQuery($query){
        $stmt = $dbh->prepare($query);
        return $stmt->execute();
    }

    /**
     * Insert 単発
     * sample ⇒　insert into sample (id, name) values (?, ?)
     * query:sql
     * arr:[1,name]
     */
    public function execInsertQuery($query,$arr){

        $stmt = $dbh->prepare($query);
        $req = $stmt->execute($arr);

        if ($req){
            throw new Execption('データの追加に成功しました<br>');
        }else{
            throw new Execption('データの追加に失敗しました<br>');
        }
    }

    /**
     * Insert 複数
     * sample ⇒　insert into sample (id, name) values (?, ?)
     * query:sql
     * arr:[n][1,name]
     */
    public function execInsertsQuery($query,$arr){

        $stmt = $dbh->prepare($query);

        foreach($arr as $val){

            $req = $stmt->execute($val);

            if ($req){
                throw new Execption('データの追加に成功しました<br>');
            }else{
                throw new Execption('データの追加に失敗しました<br>');
            }
        }
    }
}
