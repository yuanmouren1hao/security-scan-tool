<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\Encryption\unknow;

final class python extends \Yasca\Plugin
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
        (DES3|ARC4|Blowfish|CAST|PKCS1_OAEP|PKCS1_OAP|PKCS1_v1_5)\.new      |
        3des                                                                |
        enctype\s*=\s*(\'|\")DES3(\'|\")                                    
`u       
EOT
;
    }
}