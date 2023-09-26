<?php
require_once './Models/Account.php';


class Income implements Account {
  public function total($category) :int {
    $total = 0;
    $myfile = fopen("incomes.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
      $line = fgets($myfile);
      $data = explode(',', $line);
      if (count($data) >= 2) {
        if($category == $data[0]){
          $total += intval($data[1]);
        }
        echo "Category: " . $data[0] . "\tAmount: " . $data[1];
      }
    }
    fclose($myfile);
    return $total;
  }
  
  public function add(): int {
    $category = readline("Enter the category: ");
    $amount = readline("Enter the income amount: ");
    $myfile = fopen("incomes.txt", "a") or die("Unable to open file!");
    $txt = $category.",".$amount."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "Income added successfully.\n";
    return $amount;
  }

  public function view(){
    $category = readline("Enter the category: ");
    $total = $this->total($category);
    if($total == 0) echo "Invalid category, Sorry! \n\n";
    else echo "Total ".$category." ".get_class($this)." is ".$total ."\n\n";
  }
}

?>