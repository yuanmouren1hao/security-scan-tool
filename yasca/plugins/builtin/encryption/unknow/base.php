<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\encryption\unknow;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('Encryption','unknow','severity'),
                        'category' => $this->readxml('Encryption','unknow','category'),
                        'description' => $this->readxml('Encryption','unknow','desc'),
                        'references' => $this->readxml('Encryption','unknow','refs')
                ]);
    }
}