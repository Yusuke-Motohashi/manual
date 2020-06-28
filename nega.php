<?php
 include '_header.php';
 
 ?>

<div class="answers-negas">
  <a href="answers.php">ネガ返し一覧</a>
  <a href="negas.php">ネガ一覧</a>

</div>




<div class="controller" id="controller">
  <!--ネガ返し追加-->
    <form action="<?php print($_SERVER['PHP_SELF']) ?>" method="post">
        <th>【ネガ返し追加】</th>
        <h4>カテゴリ</h4>
        <select name="category1" id="category1">
      
          <option value="0">選択してください</option>
      
          <option value="【サービス】">サービス</option>
      
          <option value="【料金】">料金</option>
      
          <option value="【時期】">時期</option>
      
          <option value="【人・その他】">人・その他</option>
      
        </select>
      
        <h4>ネガ</h4>
      
        <select name="nega1" id="nega1">
      
          <option value="">選択してください</option>
      
        </select><br>
        <textarea name="answer" id="answer" cols="30" rows="4" required></textarea><br>
        <input type="submit" name="submit1" value = "追加">
    </form>

      <!-- <?php
        // $category1 = $_POST['category1'];
        // $nega1 = $_POST['nega1'];
        // $answer = nl2br($_POST['answer']);
        
        // $myfile = fopen("answers.txt","a");
        // fwrite($myfile, $_POST['category1']."：". $_POST['nega1']."\n".' => '.'「'.$answer.'」'."\n"); 
        ?> -->

    

    <!--ネガ追加-->
    <form action="<?php print($_SERVER['PHP_SELF']) ?>" method="post">
    
    <th>【ネガ追加】</th>
    <h4>カテゴリ</h4>
    <select name="category2" id="category2">
  
      <option value="0">選択してください</option>
  
      <option value="【サービス】">サービス</option>
  
      <option value="【料金】">料金</option>
  
      <option value="【時期】">時期</option>
  
      <option value="【人・その他】">人・その他</option>
  
    </select>
  
    <h4>ネガ</h4>
  
    <textarea name="nega2" id="nega2" cols="30" rows="4" required></textarea><br>
    
    <input type="submit" name="submit2" value = "追加">
</form>
      <!-- <?php
        // $category2 = $_POST['category2'];
        // $nega2 = $_POST['nega2'];
        
        // $myfile = fopen("negas.txt","a");
        // fwrite($myfile, $category2.":". $nega2."\n"); 
        ?> -->

  </div>

  <!--追加結果の表示-->
  <?php
      if(isset($_POST['submit1'])) {
        $category1 = $_POST['category1'];
        $nega1 = $_POST['nega1'];
        $answer = nl2br($_POST['answer']);
        print('<p>カテゴリ:'.$category1.'　　ネガ:'.$nega1.'</p>'.
        '<p>ネガ返し:'.'「'.$answer.'」'.'</p>'.'を追加しました！');
        
        $myfile = fopen("answers.txt","a");
        fwrite($myfile, $_POST['category1']."：". $_POST['nega1']."\n".' => '.'「'.$answer.'」'."\n"); 

      } else if (isset($_POST['submit2'])){
        $category2 = $_POST['category2'];
        $nega2 = $_POST['nega2'];
        print('<p>カテゴリ:'.$category2.'　　ネガ:'.$nega2.'<br>'.'を追加しました！');
        
        $myfile = fopen("negas.txt","a");
        fwrite($myfile, $category2.":". $nega2."\n"); 

      } else{
        null;
      }

      ?>


<?php

include '_footer.php';
