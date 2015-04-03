<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keyagreement\unknow;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('KeyAgreement','unknow','severity'),
                        'category' => $this->readxml('KeyAgreement','unknow','category'),
                        'description' => $this->readxml('KeyAgreement','unknow','desc'),
                        'references' => $this->readxml('KeyAgreement','unknow','refs')
                ]);
    }
}