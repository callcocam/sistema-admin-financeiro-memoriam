<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;


use Illuminate\Support\Facades\File;
use Livewire\Commands\ComponentParser as ComponentParserAlias;
use Illuminate\Support\Str;

class ComponentParser extends ComponentParserAlias
{

    protected $templateStub = 'table';
    protected $model;
    protected $routes;

    public function __construct($classNamespace, $viewPath, $rawCommand)
    {
        $this->routes = Str::slug( Str::beforeLast($rawCommand,'/'));
        $this->model = Str::singular( Str::beforeLast($rawCommand,'/'));

        parent::__construct($classNamespace, $viewPath, $rawCommand);
    }

    public function setTemplateStub($templateStub)
    {
        $this->templateStub = $templateStub;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateStub()
    {
        return sprintf('livewire.%s.stub', $this->templateStub);
    }

    public function classContents($inline = false)
    {
        $stubName = $this->getTemplateStub();

        if (File::exists($stubPath = base_path('stubs/' . $stubName))) {
            $template = file_get_contents($stubPath);
        } else {
            $template = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . $stubName);
        }

        if ($inline) {
            $template = preg_replace('/\[quote\]/', $this->wisdomOfTheTao(), $template);
        }
     
        return str_replace(
            ['[namespace]', '[model]', '[class]', '[view]', '[param]', '[routes]'],
            [ $this->classNamespace(),$this->model, $this->className(), $this->viewName(), Str::slug($this->model), $this->routes],
            $template
        );
    }
}
