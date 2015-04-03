<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\derivingadditionalkeys\strong;

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
        PBKDF1               |
        PBKDF2               |
        KDF                  |
        HMAC-based\s+KDF     |
        CMAC-based\s+KDF     |
        HKDF                 
`u       
EOT
;
    }
}