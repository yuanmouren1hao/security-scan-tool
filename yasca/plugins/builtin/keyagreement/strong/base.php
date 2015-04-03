<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keyagreement\strong;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('KeyAgreement','strong','severity'),
                        'category' => $this->readxml('KeyAgreement','strong','category'),
                        'description' => $this->readxml('KeyAgreement','strong','desc'),
                        'references' => $this->readxml('KeyAgreement','strong','refs')
                ]);
    }
}