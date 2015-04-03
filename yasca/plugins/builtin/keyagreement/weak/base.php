<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keyagreement\weak;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('KeyAgreement','weak','severity'),
                        'category' => $this->readxml('KeyAgreement','weak','category'),
                        'description' => $this->readxml('KeyAgreement','weak','desc'),
                        'references' => $this->readxml('KeyAgreement','weak','refs')
                ]);
    }
}