<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

ini_set('max_execution_time', 3600); // 3600 seconds = 60 minutes
Route::get('/', function () {
    return view('welcome');
});


/**
 * Translation Notes : 
 * 1- The Words With Underscores are not translated 
 *      :- Yet , We Still Need to Keep the Old Key TO put it again 
 * 2- But For Some Words It translates : 
 *      :- The Problem is that ,Arabic will Contain underscores [don’t_show_again] is Example
 * 3- URLs are not translated 
 *      :- Same For Special Characters 
 *      :- Should i Reverse the Direction For Brackets ? 
 * 4- N/A -> Trnaslated Well 
 *      :- Same For 'ex' For Example , Goes Well 
 * 
 * 5- Big Messages will lot of Special Characters are not Working 
 * 6-
 */
Route::get('/test-translate', function () {

    // $result   = $tr->translate('search_by_brand_name');
    // $result   = $tr->translate('search by brand name');
    // $result   = $tr->translate('don’t_show_again');
    // $result   = $tr->translate('https://console.firebase.google.com/');
    // $result   = $tr->translate(')');
    // $result   = $tr->translate('N/A');
    // $result   = $tr->translate('ex_:_1216_Dhaka');
    // $result   = $tr->translate('for_“Ready_Product”_deliveries _customers_can_pay_&_instantly_download_pre-uploaded_digital_products._For_“Ready_After_Sale”_deliveries _customers_pay_first_then_vendor_uploads_the_digital_products_that_become_available_to_customers_for_download');
    // $result   = $tr->translate('');

    // dd($result);
})->name('test');








Route::get('/write', function () {
    $tr = new GoogleTranslate(); // Translates to 'en' from auto-detected language by default
    $tr->setSource('en'); // Translate from English
    $tr->setSource(); // Detect language automatically
    $tr->setTarget('ar'); // Translate to Georgian

    // $messagesArray  = include 'messages.php';
    // $newTranslatedArray  =  [];

    // foreach ($messagesArray as $key => $value) {
    //     $result   = $tr->translate($key);
    //     $newTranslatedArray[$key] = $result;
    // }
    // a:1:{s:4:"text";s:11:"translation";}
    // $myfile = fopen("../routes/newfile.php", "w") or die("Unable to open file!");
    // $txt = "<?php return  \n";
    // fwrite($myfile, $txt);
    // $txtArray = $testArray;
    // fwrite($myfile, var_export($testArray));
    // fclose($myfile);
    // file_put_contents("../routes/newfile.php", print_r("<?php return  \n", true));

    // file_put_contents("../routes/newfile.php", "<?php return ".var_export($testArray, true).";");

    // file_put_contents("../routes/newfile.php", "<?php return " . var_export($newTranslatedArray, true) . ";");

    $result   = $tr->translate('set the default commission amount that will be received from vendors on each order');
    dd($result);
})->name('write');

/**
 * Two problems : 
 *      1- The Initial Translation For the Project 
 *          - I think This is Ok ..
 *      2- The 'appending' For any new Words after that 
 *          Scenration - Append : ??
 *      3- 
 */


/**
 * Anomalies : 
    // -  'company@gmail.com' => 'شركة@gmail.com',
    // -  Any Repeated Keys 
    // -  Underscores and Dashes trimming ; 
    // - Any Email / Domain ..etc 'IGNORED'
    // - Saving Translation ;
    //     - For Edits and Combinig Then On Periods Of time 
    // - Abbreviations 
    // - 
 */
