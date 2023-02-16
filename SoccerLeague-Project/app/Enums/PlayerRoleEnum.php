<?php

namespace App\Enums;

 

enum PlayerRoleEnum:string {

    case Goalkeeper = 'goalkeeper';

    case Defender = 'defender';

    case Midfielder = 'midfielder';

    case Forward = 'forward';

}