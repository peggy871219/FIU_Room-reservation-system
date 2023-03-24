<?php
  class Fab
  {
    public static function fab_rec($n)
    {
      if($n<=0){
        return 0;
      }
      elseif ($n==1) {
        return 1;
      }
      elseif ($n==2) {
        return 2;
      }
      else{
        return self::fab_rec($n-1)+self::fab_rec($n-2);
      }
    }
  }
  $fab=Fab::fab_rec($_POST['n']);
  echo $fab."\n";
?>
