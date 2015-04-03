<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keywrapping\weak;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('KeyWrapping','weak','severity'),
                        'category' => $this->readxml('KeyWrapping','weak','category'),
                        'description' => $this->readxml('KeyWrapping','weak','desc'),
                        'references' => $this->readxml('KeyWrapping','weak','refs')
                ]);
    }
}