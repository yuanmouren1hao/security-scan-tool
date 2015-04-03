<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\messageauthenticationcodes\unknow;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('MessageAuthenticationCodes','unknow','severity'),
                        'category' => $this->readxml('MessageAuthenticationCodes','unknow','category'),
                        'description' => $this->readxml('MessageAuthenticationCodes','unknow','desc'),
                        'references' => $this->readxml('MessageAuthenticationCodes','unknow','refs')
                ]);
    }
}