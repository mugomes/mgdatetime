<?php
// Copyright (C) 2026 Murilo Gomes Julio
// SPDX-License-Identifier: MIT

// Site: https://mugomes.github.io

namespace MGDateTime;

class MGDateTime
{
    public function date(string $format = 'd/M/Y'): string
    {
        return date($format);
    }

    public function now(): string
    {
        return date('d/m/Y H:i:s');
    }

    public function change(string $date, string $format = 'd/m/Y', string $newFormat = 'Y-m-d'): string
    {
        $data = \DateTime::createFromFormat($format, $date);
        return $data->format($newFormat);
    }

    public function dayOfTheWeek(string $date): string
    {
        $diasemana = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday, Saturday'];
        $valor = date('w', strtotime($date));
        return $diasemana[$valor];
    }

    public function monthInFull(int $mes): string
    {
        $meses = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $valor = ltrim($mes, '0');
        return $meses[$valor];
    }
}
