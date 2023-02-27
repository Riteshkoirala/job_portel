<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index():void
    {

        $bankAccountNumbers = [',1029129', '190291', '190292,190293', '1029194,', '190294,190295'];
        echo 'Unformatted: ';
        print_r($bankAccountNumbers);
        echo "\r\n";
        $formattedBankAccountNumbers = ['1029129', '190291', '190292', '190293', '1029194', '190294', '190295'];
        echo 'Required: ';
        print_r($formattedBankAccountNumbers);

        echo "\r\n";

        $output = [];

        foreach ($bankAccountNumbers as $account) {
            // Remove any leading or trailing commas
            $account = trim($account, ',');

            // If there are no commas left, just add the account number
            if (strpos($account, ',') === false) {
                $output[] = $account;

            } // Otherwise, split the string by commas and add the resulting account numbers
            else {
                $splitAccounts = explode(',', $account);
                foreach ($splitAccounts as $splitAccount) {
                    $output[] = $splitAccount;
                }
            }
        }

// SOLUTION CODE HERE

        echo 'Final: ';
        print_r($output);

        echo "\r\n";

        if ($output === $formattedBankAccountNumbers) {
            echo 'SOLVED!!';
        } else {
            echo 'Not solved yet.';
        }

    }
}
