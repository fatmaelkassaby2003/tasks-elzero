<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset=<?php echo "UTF-8";?> />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'My First PHP Page';?></title>
  </head>
  <body>
    <div><?= 'We Love ';?></div>
    <div><?= 'Elzero Channel ';?></div>
    <p>السلام عليكم</p>
  </body>
  <?php
      //echo 'Prevent Me From Running Please';
      #echo 'Prevent Me From Running Please';
      /*echo 'Prevent Me From Running Please';*/

      /* My Application
        Version 1.0
        Created By Elzero*/

// ## First Comment
# // # Second Comment
/* /* /* Third Comment */
////// Fourth Comment
?>
</html>
<?php
echo (integer) 15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
echo '<br>';
echo gettype( (integer) 15.2 + (int)14.7 + (int)(10.5 + 10.5) ); // Integer
echo '<br>';
echo gettype (100); 
echo '<br>';
echo var_dump(100);
echo '<br>';

echo '<br>';

// Method One
// Method Two
// Method Three => Optional


echo "// Hello \"Elzero\" \\\\\"\"\" We Love \"$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

echo nl2br("We
  Love 
  Elzero  
  Web 
  School");

/* Needed Output
We
Love
Elzero
Web
School*/

echo "<pre>";
  print_r(
    ["FrontEnd"=>
    ['HTML','CSS','JS'=>
                        ["Vuejs"=>['2'=>'v2','3'=>'v3'],
                        "0"=>"reactjs",
                        '1'=>'svelte'
                        ]
    ],
    'Backend'=>['php','Mysql','security'],
    'Get','GetHub',
    'testing'=>['Unit Testing','END TO END','integration'],
  ]

  ) ;

echo "</pre>";

echo gettype( (integer)"Hello PHP");
echo '<br>';
echo var_dump((bool) "Hello PHP");
echo '<br>';
echo (boolean)"Hello PHP";
echo '<br>';
echo nl2br(<<<'Now'
Hello "'Elzero'"
We Love $Programming $
Languages Specially "PHP"
Now);
echo '<br>';
echo '<br>';
$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
//Hello \PHP\ We Love Programming
// Array
// (
//   [FrontEnd] => Array
//     (
//       [0] => HTML
//       [1] => CSS
//       [JS] => Array
//         (
//           [Vuejs] => Array
//             (
//               [2] => v2
//               [3] => v3
//             )

//           [0] => Reactjs
//           [1] => Svelte
//         )
//     )

//   [BackEnd] => Array
//     (
//       [0] => PHP
//       [1] => MySQL
//       [2] => Security
//     )

//   [0] => Git
//   [1] => Github
//   [Testing] => Array
//     (
//       [0] => Unit Testing
//       [1] => End To End
//       [2] => Integration
//     )
// )
