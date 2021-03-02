<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\HTTP;

use App\Models\Credential;
use App\SIGA\HTTP\Exceptions\ServiceException;
use Illuminate\Support\Facades\Http;
use SIGA\HTTP\Traits\ConsumerExternalService;

abstract class AbstractServices
{
    use ConsumerExternalService;

    protected $credentials;

    public function __construct(Credential $credential)
    {

       $client = $credential->where('token',$this->credentials)->first();

       if(!$client){
         throw new ServiceException("Criar uma credential com esse {$this->credentials}, no cadastro de credential");
       }

       $this->baseUri = $client->endpoint;

        if (!session()->has('access_token')) {
            $this->login($client);
        }
        $this->token(session()->get('access_token'));
    }

    public static function make(): AbstractServices
    {
        return new static();
    }

    public function login($client)
    {
        //'oauth/token'
        $response = Http::post($this->url('oauth/token'), [
            'grant_type' => $client->grant_type,
            'client_id' => $client->client_id,
            'client_secret' => $client->client_secret,
            'scope' => $client->scope,
        ]);

        if ($response->successful()) {
            session()->put('access_token', $response->object()->access_token);
            return $response;
        }
        flash($response->throw()->message, 'danger');
        return $response;
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\Client\Response
     */
    public function paginate($url, array $data = [])
    {
        $response = $this->request()->get($url, $data);
        if ($response->successful()) {
            return $response;
        }
        return $response->throw();
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\Client\Response
     */
    public function get($data = [])
    {
        $response = $this->request()->get($this->getBaseUri(), $data);
        if ($response->successful()) {
            return $response->object();
        }
        return $response->throw();
    }

    /**
     * @param $one
     * @param array $data
     * @return \Illuminate\Http\Client\Response
     */
    public function edit($one, $data = [])
    {

        $response = $this->request()->get($this->getUrl($one), $data);
        if ($response->successful()) {
            return $response;
        }
        return $response->throw();
    }

    /**
     * @param $one
     * @param array $data
     * @return \Illuminate\Http\Client\Response
     */
    public function show($one, $data = [])
    {
        $response = $this->request()->get($this->getUrl($one), $data);
        if ($response->successful()) {
            return $response;
        }
        return $response->throw();
    }

    public function store($data)
    {
        $response = $this->request()->post($this->getBaseUri(), $data);
        if ($response->successful()) {
            return $response;
        }
        return $response->throw();
    }

    public function update($one, $data)
    {
        $response = $this->request()->put($this->getUrl($one), $data);
        if ($response->successful()) {
            return $response;
        }
        return $response->throw();
    }

    public function delete($one, $data = [])
    {
        $response = $this->request()->delete($this->getUrl($one), $data);
        if ($response->successful()) {
            session()->flash('success', "Operação realizada com sucesso!!!");
            return true;
        }
        session()->flash('error', $response->throw()->message);
        return false;
    }

}
