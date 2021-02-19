<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Services;

use SIGA\HTTP\AbstractServices;

class ClientService extends AbstractServices
{
    protected $credentials = "5069754e-09f7-40fc-a563-094118fa8412";

    public function services(){
        return 'clients';
    }

}
