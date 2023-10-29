<?php
  
  $choice = 0;
  $income = 0;
  $expense = 0;
  require_once './vendor/autoload.php';
  use App\Models\User;
  use App\Models\Customer;

  do {
    echo "Select from the following menu".PHP_EOL."1. Login ".PHP_EOL."2. Register".PHP_EOL."3. Exit".PHP_EOL;
    echo "Enter a value: ";
    $choice = readline("Enter your choice (1-3): ");

    switch ($choice) {
      case 1:
        $user = new User();
        $username = readline("Please enter your username: ");
        $password = readline("Please enter your password: ");

        break;
      case 2:
        $customer = new Customer();
        // $customer->register();
        $email = readline("Email: ");
        $password = readline("Name: ");
        $password = readline("Password: ");
        break;
      case 3:
        echo "Exiting the program.".PHP_EOL;
        exit;
      default:
        echo "Invalid choice. Please enter a valid option (1-3).".PHP_EOL;
    }
  }while($choice != 7);
?>