<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\hashfunctions\weak;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('HashFunctions','weak','severity'),
                        'category' => $this->readxml('HashFunctions','weak','category'),
                        'description' => $this->readxml('HashFunctions','weak','desc'),
                        'references' => $this->readxml('HashFunctions','weak','refs')
                ]);
    }
}