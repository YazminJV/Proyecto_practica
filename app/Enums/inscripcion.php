<?php

namespace App\Enums;

enum inscripcion:string
{
    case Activa='Activa';
    case Pendiente= 'Pendiente';
    case Cancelada= 'Cancelada';
    case Inactiva= 'Inactiva';
}
