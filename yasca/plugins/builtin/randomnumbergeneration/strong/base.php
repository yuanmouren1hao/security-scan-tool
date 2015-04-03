<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\randomnumbergeneration\strong;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('RandomNumberGeneration','strong','severity'),
                        'category' => $this->readxml('RandomNumberGeneration','strong','category'),
                        'description' => $this->readxml('RandomNumberGeneration','strong','desc'),
                        'references' => $this->readxml('RandomNumberGeneration','strong','refs')
                ]);
    }
}