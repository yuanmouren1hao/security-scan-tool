<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\derivingadditionalkeys\strong;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('DerivingAdditionalKeys','strong','severity'),
                        'category' => $this->readxml('DerivingAdditionalKeys','strong','category'),
                        'description' => $this->readxml('DerivingAdditionalKeys','strong','desc'),
                        'references' => $this->readxml('DerivingAdditionalKeys','strong','refs')
                ]);
    }
}