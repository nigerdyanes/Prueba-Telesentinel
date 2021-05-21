<?php

if (! function_exists('parser_data_db')) {
    function parser_data_db($data) {
        $months = array(
            'Enero','Febrero','Marzo',
            'Abril','Mayo','Junio','Julio', 'Agosto',
            'Septiembre','Octubre','Noviembre','Diciembre'
        );
        foreach ($data as $key => $value) {
            $data[$key]->month = $months[$value->MONTH - 1];
            unset($data[$key]->MONTH);
        }
        return $data;
    }
}
