<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\messageauthenticationcodes\strong;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('MessageAuthenticationCodes','strong','severity'),
                        'category' => $this->readxml('MessageAuthenticationCodes','strong','category'),
                        'description' => $this->readxml('MessageAuthenticationCodes','strong','desc'),
                        'references' => $this->readxml('MessageAuthenticationCodes','strong','refs')
                ]);
    }
}