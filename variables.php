<?php

// 변수
// 유지보수에 유용하도록 변수명 신경쓸것
$sValue = "Hell";
$iCount = 1;
$bValue = true; // camel case
$o_obj = null; // snake case

//////////////////////////////////////////////

// '' "" 차이점
// "" => 변수인지
echo "The message is {$sValue}\n";

// '' => 변수인지 x
echo 'The message is {$sValue}' . "\n";

//////////////////////////////////////////////

// Here Doc Now Doc
// html 을 깔끔하게 출력

// Here Doc (변수 인지)
echo <<<HTML
<html>
    <head>
        <title>$sValue</title>
    </head>
</html>
HTML;

// Now Doc (변수 인지x)
echo <<<'HTML'
<html>
    <head>
        <title>$sValue</title>
    </head>
</html>
HTML;

echo "\n";

//////////////////////////////////////////////

// Variable variables (가변변수)
// 꼭 필요한 경우에만 사용할 것 (php 가 유연해서 이런게 가능)

$sVarName = 'var_name';
$$sVarName = "var_value";

echo $var_name;