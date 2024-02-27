<?php 

namespace App\Enums;


enum SupportStatus: string{
    case A= "Open";
    case C= "Closed";
    case P="Pendent";
}