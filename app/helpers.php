<?php

function customTanggal($date)
{
    return Carbon\Carbon::parse($date)->locale('id')->isoFormat('D MMMM Y');
}

function format_rupiah($number)
{
    return "Rp " . number_format($number, 0, '.', '.');
}

function retrive_bool($value)
{
    $hasil = false;
    if ($value == "true") {
        $hasil = true;
    }

    return $hasil;
}

function renameFiles($str)
{
    $word = preg_replace("/[^a-zA-Z0-9_-]/s", "", $str);
    $word = str_replace("-", "", $word);

    return str_replace(" ", "_", $word);
}