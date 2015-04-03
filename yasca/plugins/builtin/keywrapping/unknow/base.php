<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keywrapping\unknow;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('KeyWrapping','unknow','severity'),
                        'category' => $this->readxml('KeyWrapping','unknow','category'),
                        'description' => $this->readxml('KeyWrapping','unknow','desc'),
                        'references' => $this->readxml('KeyWrapping','unknow','refs')
                ]);
    }
}