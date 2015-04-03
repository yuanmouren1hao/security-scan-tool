<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\hashfunctions\unknow;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('HashFunctions','unknow','severity'),
                        'category' => $this->readxml('HashFunctions','unknow','category'),
                        'description' => $this->readxml('HashFunctions','unknow','desc'),
                        'references' => $this->readxml('HashFunctions','unknow','refs')
                ]);
    }
}