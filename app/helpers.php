<?php

function customTanggal($date)
{
    return Carbon\Carbon::parse($date)->locale('id')->isoFormat('D MMMM Y');
}

function format_rupiah($number)
{
    return "Rp " . number_format($number, 0, '.', '.');
}