<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\digitalsignatures\weak;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('DigitalSignatures','weak','severity'),
                        'category' => $this->readxml('DigitalSignatures','weak','category'),
                        'description' => $this->readxml('DigitalSignatures','weak','desc'),
                        'references' => $this->readxml('DigitalSignatures','weak','refs')
                ]);
    }
}