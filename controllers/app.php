


<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../models/factory.php';
$viewFromUrl = filter_input(INPUT_GET,'view');
if(isset($viewFromUrl)){
    getView($viewFromUrl);
}
    
