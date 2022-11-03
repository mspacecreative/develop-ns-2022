<?php 
$rowwidth = get_field('row_width');
switch ($rowwidth) {
    case '800':
        $rowwidth = ' w800';
        break;
    case '1080':
        $rowwidth = ' w1080';
        break;
    case '1280':
        $rowwidth = ' w1280';
        break;
    default:
        $rowwidth = '';
        break;
}