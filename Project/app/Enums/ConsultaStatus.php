<?php

namespace App\Enums;

enum ConsultaStatus: string {
    case a="Open";
    case p="Pendent";
    case c ="Closed";

    public static function fromValueS(string $value): string { 
        foreach(self::cases() as $status) {
            if($value == $status->name){
                return $status->name;
            }
        }
        throw new \ValueError("$value is not valid!");
     }
}