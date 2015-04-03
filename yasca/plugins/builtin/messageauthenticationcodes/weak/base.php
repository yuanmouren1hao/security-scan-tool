<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\messageauthenticationcodes\weak;

trait Base
{
    use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult ()
    {
        return (new \Yasca\Result())->setOptions(
                [
                        'severity' => $this->readxml('MessageAuthenticationCodes','weak','severity'),
                        'category' => $this->readxml('MessageAuthenticationCodes','weak','category'),
                        'description' => $this->readxml('MessageAuthenticationCodes','weak','desc'),
                        'references' => $this->readxml('MessageAuthenticationCodes','weak','refs')
                ]);
    }
}