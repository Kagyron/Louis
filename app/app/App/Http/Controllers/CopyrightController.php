<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/#p=display&f=Graffiti&t=By+Louis&x=none&v=4&h=4&w=80&we=false
    public const COPYRIGHT = "
__________         .____                .__          ____  __.                           ___.                        
\______   \___.__. |    |    ____  __ __|__| ______ |    |/ _|______   ____  __ _________\_ |__   ___________  ____  
 |    |  _<   |  | |    |   /  _ \|  |  \  |/  ___/ |      < \_  __ \_/ __ \|  |  \___   /| __ \_/ __ \_  __ \/ ___\ 
 |    |   \\___  | |    |__(  <_> )  |  /  |\___ \  |    |  \ |  | \/\  ___/|  |  //    / | \_\ \  ___/|  | \/ /_/  >
 |______  // ____| |_______ \____/|____/|__/____  > |____|__ \|__|    \___  >____//_____ \|___  /\___  >__|  \___  / 
        \/ \/              \/                   \/          \/            \/            \/    \/     \/     /_____/  
Copy
Save as image

        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}
