<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\derivingadditionalkeys\unknow;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('DerivingAdditionalKeys','unknow','severity'),
                        'category' => $this->readxml('DerivingAdditionalKeys','unknow','category'),
                        'description' => $this->readxml('DerivingAdditionalKeys','unknow','desc'),
                        'references' => $this->readxml('DerivingAdditionalKeys','unknow','refs')
                ]);
    }
}