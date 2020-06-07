<?php
// 대문자로 작성
const CONSTANT = "Hell World";
const INT_CONSTANT = 1;
const BOOL_CONSTANT = true;

var_dump(CONSTANT);

// 옛날방식
// const 와 function scope 가 다름 (추후에 알아봄)
define('OLD_CONSTANT', 'Hell World');

echo __FILE__ . "\n";
echo __LINE__. "\n";
echo __CLASS__. "\n";
echo __FUNCTION__. "\n";