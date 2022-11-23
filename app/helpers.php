<?php

function customTanggal($date)
{
    return Carbon\Carbon::parse($date)->locale('id')->isoFormat('D MMMM Y');
}