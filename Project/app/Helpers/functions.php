<?php

use App\Enums\ConsultaStatus;

    if(!function_exists("getStatusConsulta")){
        function getStatusConsulta(string $status): string{
            return ConsultaStatus::fromValueS($status);
        }
    }