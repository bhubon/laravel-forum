<?php

namespace App\Enums;

enum ThreadStatusEnums: string
{
    case OPEN = 'open';
    case DELETED = 'deleted';
    case CLOSED = 'closed';
}
