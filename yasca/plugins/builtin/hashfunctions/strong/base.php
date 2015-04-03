<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\hashfunctions\strong;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('HashFunctions','strong','severity'),
                        'category' => $this->readxml('HashFunctions','strong','category'),
                        'description' => $this->readxml('HashFunctions','strong','desc'),
                        'references' => $this->readxml('HashFunctions','strong','refs')
                ]);
    }
}