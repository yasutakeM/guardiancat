<?php

class DbOperation {

      //  ローカル環境
      public function get_pdo(){
          $dsn = 'mysql:dbname=admin;host=localhost;charset=utf8';
          $user = 'makita';
          $password = 'pass';
          return new PDO($dsn, $user, $password);
      }

      //本番環境
      // public function get_pdo(){
      //   $dsn = 'mysql:dbname=LAA0806688-guardiancat;host=mysql140.phy.lolipop.lan;charset=utf8';
      //   $user = 'LAA0806688';
      //   $password = 'ymakita';
      //   return new PDO($dsn, $user, $password);
      // }


      //新ネコ登録
      public function insert($region,$name,$age,$gender,$color,$skill,$info,$image){
        try{
            $dbh = $this -> get_pdo();
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO guardianCat (region,name,age,gender,color,skill,info,image,update_date) VALUES ( :region, :name, :age ,:gender,:color,:skill,:info,:image,:update_date)";
            $stmh = $dbh->prepare($sql);
            $stmh->bindValue(':region',$region);
            $stmh->bindValue(':name', $name);
            $stmh->bindValue(':age', $age);
            $stmh->bindValue(':gender', $gender);
            $stmh->bindValue(':color', $color);
            $stmh->bindValue(':skill', $skill);
            $stmh->bindValue(':info', $info);
            $stmh->bindValue(':image', $image);
            $stmh->bindValue(':update_date', date("Y/m/d H:i:s") );
            $stmh->execute();

            if ($stmh) {
                return true;
            } else {
                echo "<br><br>登録できてませんよ";
            }

            } catch (PDOException $e){
                print('Connection failed:'.$e->getMessage());
                die();
            }
      }

      //新規会員登録
      public function insert_user($name,$password){
        try{
            $dbh = $this -> get_pdo();
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users (name,password) VALUES ( :name, :password )";
            $stmh = $dbh->prepare($sql);
            $stmh->bindValue(':name', $name);
            $stmh->bindValue(':password', $password);
            $stmh->execute();

            if ($stmh) {
                return true;
            } else {
                echo "<br><br>登録できてませんよ";
            }

            } catch (PDOException $e){
                print('Connection failed:'.$e->getMessage());
                die();
            }
      }

      public function select_region($id){
        try{
            $dbh = $this -> get_pdo();
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT pref FROM region WHERE regionID = :id";
            $stmh = $dbh->prepare($sql);
            $stmh->bindValue(':id',$id);
            $stmh->execute();
            $count = $stmh->rowCount();

            $region ="";
            if($count < 1){
              $region = "データがありません。";
            }else{
              $region = $stmh->fetch(PDO::FETCH_ASSOC);
            }
          return $region;

         } catch (PDOException $e){
            print('Connection failed:'.$e->getMessage());
            die();
        }
      }

      //ねこ情報(guardianCatCatテーブル)問い合わせ

      //元のやつ（全データ吐き出す）
      // public function get_cats_info(){
      //     $dbh = $this->get_pdo();
      //     $sql = 'SELECT * FROM guardianCat';
      //     $result = $dbh->query($sql);
      //     return $result;
      // }

      //ページングで使いたいやつ
      public function get_cats_info($new_page){
        $dbh = $this->get_pdo();
        $sql = "SELECT * FROM guardianCat LIMIT {$new_page}, 10";
        $result = $dbh->query($sql);
        return $result;
      }

      public function cat_count(){
          $dbh = $this->get_pdo();
          $sql = 'SELECT COUNT( id ) FROM guardianCat';
          $stmt = $dbh->query($sql);
          return $stmt->fetchColumn();
      }

      //特定IDの猫の情報取得 情報更新用　update.php
      public function select_cat($id){
        try{
            $dbh = $this -> get_pdo();
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM guardianCat WHERE id = :id";
            $stmh = $dbh->prepare($sql);
            $stmh->bindValue(':id',$id);
            $stmh->execute();
            $count = $stmh->rowCount();

            $catInfo ="";
            if($count < 1){
              $catInfo = "データがありません。";
            }else{
              $catInfo = $stmh->fetch(PDO::FETCH_ASSOC);
            }
          return $catInfo;

         } catch (PDOException $e){
            print('Connection failed:'.$e->getMessage());
            die();
        }
      }
    //データ削除用
    public function cat_data_delete($id){
        try {
          $dbh = $this->get_pdo();
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "DELETE FROM guardianCat WHERE id = :id";
          $stmt = $dbh->prepare($sql);
          $stmt->bindValue(':id',$id);
          $stmt->execute();

          if($stmt){
            echo "<h3>データの削除が完了しました</h3><div class='message'>ID".$id."の警備員、「<span>".$_POST['name']."</span>」は無事に里親家へ就職。警備活動を開始しました。</div>";
          }

        }catch (PDOException $e){
          print('Connection failed:'.$e->getMessage());
          die();
      }
    }

    //データ修正用

    public function cat_data_retouch ($id,$region,$name,$age,$gender,$color,$skill,$info,$image){
      try{
          $dbh = $this -> get_pdo();
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          // $sql = "UPDATE guardianCat SET region=:region,name=:name,age=:age,gender=:gender,color:color,skill=:skill,info=:info,image=:image,update_date=:update_date WHERE id = :id";

          $sql = "UPDATE guardianCat SET region=:region,name=:name,age=:age,gender=:gender,color=:color,skill=:skill,info=:info,image=:image WHERE id = :id";

          $stmh = $dbh->prepare($sql);
          $stmh->bindValue(':region',$region);
          $stmh->bindValue(':name', $name);
          $stmh->bindValue(':age', $age);
          $stmh->bindValue(':gender', $gender);
          $stmh->bindValue(':color', $color);
          $stmh->bindValue(':skill', $skill);
          $stmh->bindValue(':info', $info);
          $stmh->bindValue(':image', $image);
          // $stmh->bindValue(':update_date', date("Y/m/d H:i:s") );
          $stmh->bindValue(':id',$id);

          $stmh->execute();

          if ($stmh) {
              return true;
          } else {
              echo "<br><br>更新できませんでした";
          }

          } catch (PDOException $e){
              print('Connection failed:'.$e->getMessage());
              die();
          }
    }

}
?>
