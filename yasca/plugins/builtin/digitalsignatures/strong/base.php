<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\digitalsignatures\strong;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('DigitalSignatures','strong','severity'),
                        'category' => $this->readxml('DigitalSignatures','strong','category'),
                        'description' => $this->readxml('DigitalSignatures','strong','desc'),
                        'references' => $this->readxml('DigitalSignatures','strong','refs')
                ]);
    }
}