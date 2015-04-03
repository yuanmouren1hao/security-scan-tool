<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keywrapping\strong;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('KeyWrapping','strong','severity'),
                        'category' => $this->readxml('KeyWrapping','strong','category'),
                        'description' => $this->readxml('KeyWrapping','strong','desc'),
                        'references' => $this->readxml('KeyWrapping','strong','refs')
                ]);
    }
}