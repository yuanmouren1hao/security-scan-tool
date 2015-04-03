<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\encryption\weak;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('Encryption','weak','severity'),
                        'category' => $this->readxml('Encryption','weak','category'),
                        'description' => $this->readxml('Encryption','weak','desc'),
                        'references' => $this->readxml('Encryption','weak','refs')
                ]);
    }
}