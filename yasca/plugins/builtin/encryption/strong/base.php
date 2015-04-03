<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\encryption\strong;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('Encryption','strong','severity'),
                        'category' => $this->readxml('Encryption','strong','category'),
                        'description' => $this->readxml('Encryption','strong','desc'),
                        'references' => $this->readxml('Encryption','strong','refs')
                ]);
    }
}