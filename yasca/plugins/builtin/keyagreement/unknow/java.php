<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keyagreement\unknow;

final class java extends \Yasca\Plugin
{
    use Base,\Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses ()
    {
        return [
                'java'
        ];
    }

    protected function getRegex ()
    {
        return <<<'EOT'
`(?ix)
        DiffieHellman                 |
        ECDH                          |
        ECMQV                         |
        KeyAgreement\.getInstance     
`u       
EOT
;
    }
}