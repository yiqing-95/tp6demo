<?php
// 应用公共文件


/**
 * Undocumented function
 *
 * @param null|string $str
 * @return string
 */
function empty2string($str ){
    return empty($str) ? '' : $str;
}

/**
 * Undocumented function
 *
 * @param [callable] $callable
 * @param array $args
 * @return  mixed|false 
 * 
 * @see https://www.php.net/manual/zh/function.call-user-func-array
 */
function php_call($callable,  mixed ...$args){
    // return call_user_func_array($callable, $args);
    return call_user_func($callable,$args);
}