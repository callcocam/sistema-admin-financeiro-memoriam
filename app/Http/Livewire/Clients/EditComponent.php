<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use App\Services\ClientService;
use SIGA\Form\Fields\Cover;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;
use SIGA\Form\FormComponent;

class EditComponent extends FormComponent
{

    protected $route = "clients";
    public $isActions = false;

    public function mount(Client $client, ClientService $clientService)
    {
        $service = $clientService->edit($client->id)->object();
        $client->cnpj = $service->cnpj ?? null;
        $client->email = $service->email ?? null;
        $client->phone = $service->phone ?? null;
        $client->website = $service->website ?? null;
        $client->about = $service->about ?? null;
        $client->facebook = $service->facebook ?? null;
        $client->instagram = $service->instagram ?? null;
        $client->cover = $service->cover ?? null;
        $client->status = $service->status ?? null;
        $client->uuid = $service->uuid ?? null;
        $this->setFormProperties($client);
    }

    /**
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('name'),
            Text::make('document'),
            Text::make('cnpj'),
            Text::make('email'),
            Text::make('phone'),
            Text::make('website'),
            Text::make('facebook'),
            Text::make('instagram'),
            Cover::make('cover'),
            Textarea::make('about'),
        ];
    }
}
