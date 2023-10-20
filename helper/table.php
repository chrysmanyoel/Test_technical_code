<?php
/**
 * Select table crmlogger
 * 
 * Database crmlogger dibagi per kuartal
 * table name : table_kuartal_tahun
 * example: crmlogger_q1_2020
 * 
 * 
 * Penggunaan :
 * table_selector('crmlogger', 1, 2020)
 * 
 * Hasil :
 * crmlogger_q1_2020
 * 
 */

function table_selector($table, $month, $year)
{
    $date_filter = new DateTime("$year-$month-01 00:00:00");    
    $date_now    = new DateTime();
    $date_diff   = $date_filter->diff($date_now)->days;

    if($date_diff < 93)
    { 
        return $table;
    }
 
    $quarter = '';
    if(in_array($month, [1, 2, 3]))
    {
        $quarter = '_q1_';
    } 
    elseif(in_array($month, [4, 5, 6]))
    {
        $quarter = '_q2_';
    }
    elseif(in_array($month, [7, 8, 9])) 
    {
        $quarter = '_q3_';
    }
    elseif(in_array($month, [10, 11, 12]))
    {
        $quarter = '_q4_';
    }

    return $table . $quarter . $year;
}

/**
 * Select all quarter table crmlogger
 * 
 * Database crmlogger all
 * 
 * Penggunaan :
 * table_all('crmlogger')
 * 
 */

function table_all($table)
{
    $return = array();
    $start  = strtotime('2020-01-01');
    $end    = strtotime(date('Y-m-d'));
    
    while($start < $end)
    {
        $date       = date('Y-m', $start);
        $date       = explode('-', $date);

        $get_table  = table_selector($table, $date[1], $date[0]);
        if( ! in_array($get_table, $return))
        {
            $return[]   = $get_table;
        }

        $start      = strtotime("+1 month", $start);
    }

    return $return;
}

/**
 * Select all quarter table crmlogger with limit MIN or MAX
 * 
 * Penggunaan :
 * table_limit('crmlogger', 2022, 'MIN')
 * table_limit('crmlogger', 2021, 'MAX')
 * 
 * 
 * @param   String  table name
 * @param   Int     year
 * @param   String  limit: MIN|MAX
 * @return  array
 * 
 */
function table_limit($table, $year, $limit)
{
    $return = array();
    $start  = strtotime('2020-01-01');
    $end    = strtotime(date('Y-m-d'));

    if($year >= 2020 && $year <= date('Y'))
    {
        if($limit == 'MIN')
        {
            $start  = strtotime("$year-01-01");
        }
        elseif($limit == 'MAX')
        {
            $end    = strtotime("$year-12-31");
        }
    }

    while($start < $end)
    {
        $date       = date('Y-m', $start);
        $date       = explode('-', $date);

        $get_table  = table_selector($table, $date[1], $date[0]);
        if( ! in_array($get_table, $return))
        {
            $return[]   = $get_table;
        }

        $start      = strtotime("+1 month", $start);
    }

    return $return;
}