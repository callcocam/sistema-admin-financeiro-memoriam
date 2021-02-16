<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Concerns;


trait UsesLandlordConnection
{
    use UsesMultitenancyConfig;

    public function getConnectionName()
    {

        return $this->landlordDatabaseConnectionName();
    }
}
