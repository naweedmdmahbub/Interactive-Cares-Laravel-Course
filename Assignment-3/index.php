<?php
  
  $choice = 0;
  $income = 0;
  $expense = 0;
  require_once './vendor/autoload.php';
  use App\Models\Category;

  do {
    echo "Select from the following menu".PHP_EOL."1. Login ".PHP_EOL."2. Register".PHP_EOL."3. Exit".PHP_EOL;
    echo "Enter a value: ";
    $choice = readline("Enter a value (1-3): ");

    switch ($choice) {
      case 1:
        $category = new Category();
        break;
      case 2:
        break;
      case 3:
        echo "Exiting the program.".PHP_EOL;
        exit;
      default:
        echo "Invalid choice. Please enter a valid option (1-3).".PHP_EOL;
    }
  }while($choice != 7);
?>