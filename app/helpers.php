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