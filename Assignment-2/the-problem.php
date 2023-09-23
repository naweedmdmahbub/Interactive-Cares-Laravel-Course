#! /usr/bin/env php
<?php
    function readData($filename)
    {
        $categoryData = [];
        if (($handle = fopen($filename, "r")) !== false) {
            // Read and ignore the header row
            fgetcsv($handle);
            if($filename == 'categories.csv'){
                while (($data = fgetcsv($handle)) !== false) {
                    $type = $data[0];
                    $category = $data[1];
                    $categoryData[] = ['type' => $type, 'category' => $category];
                }
                fclose($handle);
                $finalData = $categoryData;
            }
            if($filename == 'incomes.csv'){
                while (($data = fgetcsv($handle)) !== false) {
                    $category = $data[0];
                    $amount = $data[1];
                    $incomeData[] = ['category' => $category, 'amount' => $amount];
                }
                fclose($handle);
                $finalData = $incomeData;
            }
            if($filename == 'expenses.csv'){
                while (($data = fgetcsv($handle)) !== false) {
                    if (count($data) === 2) {
                        $category = $data[0];
                        $amount = $data[1];
                        $expenseData[] = ['category' => $category, 'amount' => $amount];
                    }
                }
                fclose($handle);
                $finalData = $expenseData;
            }
            // var_dump($finalData);
        }
        return $finalData;
    }

    $choice = 0;
    $income = 0;
    $expenses = 0;
    while($choice != 7){
        echo "What do you want to do?\n1. Add income \n2. Add expense \n3. View income \n4. View expense \n5. View total \n6. View Categories\n\n";
        echo "Enter a value: ";
    
        $choice = readline("Enter a value (1-7): ");
        
        switch ($choice) {
            case 1:
                $category = readline("Enter the category: ");
                $amount = readline("Enter the income amount: ");

                $file = fopen("incomes.csv", "a");
                fputcsv($file, [$category, $amount]);
                fclose($file);

                echo "Income added successfully.\n";
                break;
            case 2:
                $amount = readline("Enter the expense amount: ");
                $category = readline("Enter the expense category: ");
                echo "Expense added successfully.\n";
                break;
            case 3:
                echo "View income: $income\n";
                $incomeData = readData("incomes.csv");
                foreach ($incomeData as $item) {
                    echo "Type: " . $item['type'] . ", Category: " . $item['category'] . "\n";
                }
                break;
            case 4:
                echo "Total expenses: $expenses\n";
                break;
            case 5:
                $total = $income - $expenses;
                echo "Total balance: $total\n";
                break;
            case 6:
                echo "View categories:\n";
                $categoryData = readData("categories.csv");
                foreach ($categoryData as $item) {
                    echo "Type: " . $item['type'] . ", Category: " . $item['category'] . "\n";
                }
                break;
            case 7:
                echo "Exiting the program.\n";
                exit;
            default:
                echo "Invalid choice. Please enter a valid option (1-7).\n";
        }

    }
?>