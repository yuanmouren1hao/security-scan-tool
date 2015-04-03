<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\digitalsignatures\unknow;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('DigitalSignatures','unknow','severity'),
                        'category' => $this->readxml('DigitalSignatures','unknow','category'),
                        'description' => $this->readxml('DigitalSignatures','unknow','desc'),
                        'references' => $this->readxml('DigitalSignatures','unknow','refs')
                ]);
    }
}