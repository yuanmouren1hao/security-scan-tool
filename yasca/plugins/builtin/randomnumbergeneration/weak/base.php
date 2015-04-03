<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\randomnumbergeneration\weak;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('RandomNumberGeneration','weak','severity'),
                        'category' => $this->readxml('RandomNumberGeneration','weak','category'),
                        'description' => $this->readxml('RandomNumberGeneration','weak','desc'),
                        'references' => $this->readxml('RandomNumberGeneration','weak','refs')
                ]);
    }
}