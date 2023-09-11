<?php


// Plain Text Covert
    // htmlentities() 
    // htmlspecialchars()

echo "<h3><u> Html Entities </u></h3>";
$data = "<script> alart() </script>";
$convertData= htmlentities($data);
echo $convertData;


// String Repeat

echo "<h3><u> String Repeat </u></h3>";
$sting= "Abbas Ali Rakib";
echo str_repeat($sting, 3) ;



// Explode Method

echo "<h3><u> Explode Text </u></h3>";
$user = "Abbas.Ali.Rakib";

echo '<pre>';
 print_r(explode(".", $user));
echo '</pre>';



// File Format Checking using end funciton

echo "<h3><u> File Format Check </u></h3>";
$fileName= "DIPLOMA IN COMPUTER ENGINEERING.docx.png.jpeg";
$fnArray= explode(".", $fileName);

echo '<pre>';
 print_r($fnArray);
echo '</pre>';

if(end($fnArray) == "jpeg"){
    echo "Successfully Upload Your File";
}else{
    echo "Support only jpeg and png format";
}


?>

<input type="file">


<?php

// Explode Method

echo "<h3><u> Add Data </u></h3>";
$userName = ["Abbas","Ali","Rakib"];

echo implode(" ", $userName);



// Array count function

echo "<h3><u> Count User Id </u></h3>";
$user= [
    [
        'id' => 1,
        'Name' => "X",
    ],
    [
        'id' => 2,
        'Name' => "Y",
    ],
    [
        'id' => 3,
        'Name' => "Z",
    ],
];

    echo count($user);


// Count User Information

echo "<h3><u> Count Information </u></h3>";
$users= [
    [
        'id' => 1,
        'Name' => "X"
    ],
    [
        'id' => 2,
        'Name' => "Y"
    ],
    [
        'id' => 3,
        'Name' => "Z"
    ],
];
    if(count($users) > 3){
        echo "Entry Over";
    }else{
        echo "Entry Allow";
    }



// Array Push, Pop, Unshift and Shift Function

// array_push

echo "<h3><u> Data Insert And Delete </u></h3>";
$userData= ['id','Name','Phone'];
array_push($userData,"E-mail",[
    'a'=> 'Adderss', 
    'b'=> 'P.Address']);

echo '<pre>';
 print_r($userData);
echo '</pre>';


// array_pop

$userData= ['id','Name','Phone'];
array_pop($userData);
array_pop($userData);

    echo '<pre>';
    print_r($userData);
    echo '</pre>';


// array_unshift

$userData= ['id','Name','Phone'];
array_unshift($userData, "Sl.No");

    echo '<pre>';
    print_r($userData);
    echo '</pre>';


// array_shift

$userData= ['id','Name','Phone'];
array_shift($userData);

    echo '<pre>';
    print_r($userData);
    echo '</pre>';




// Reverse Array Function

echo "<h3><u> Reverse Data </u></h3>";
$fruits= ['Mango','Bannana','Goava','Carrot'];

    echo '<pre>';
    print_r (array_reverse($fruits));
    echo '</pre>';

    



// Difference Array Function

echo "<h3><u> Data Differance </u></h3>";
    $difData= [
        'id' => 01,
        'Name' => "Abbas",
        'email' => "rakib@gamil.com"
    ];
    $updifData= [
        'id' => 02,
        'Name' => "Ali",
        'email' => "rakib@gamil.com"
    ];

echo '<pre>';
print_r(array_diff($difData, $updifData));
echo '</pre>';



// Empty Function

echo "<h3><u> Empty Data Check </u></h3>";
$ckData= '           Rakib';
var_dump(empty(trim($ckData)));
echo "<br>";

    if(empty(trim($ckData))){
        echo 'Invalid Empty';
    }else{
        echo 'Good Job';
    }

// Isset Function

echo "<h3><u> Value Check </u></h3>";
$ckData= '';
var_dump(isset($ckData));