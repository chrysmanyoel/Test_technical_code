<?php
function dd($data){
    echo '<pre>'.print_r($data, TRUE).'</pre>';
    die();
}
?>