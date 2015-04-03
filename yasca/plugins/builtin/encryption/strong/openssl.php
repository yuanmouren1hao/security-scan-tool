<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\Encryption\strong;

final class openssl extends \Yasca\Plugin
{
    use Base,\Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses ()
    {
        return [
                'py',
                'conf'
        ];
    }

    protected function getRegex ()
    {
        return <<<'EOT'
`(?ix)
        aes-\d{3}(\b|-.{3,20})   |
        camellia-\d{3}-.(3,4)    |
        aes\d{3}                 |
        camellia\d{3}            |
        blowfish                 |
        id-aes\d{3}-GCM          |
        desx                     |
        desx-cbc                 
`u       
EOT
;
    }
}