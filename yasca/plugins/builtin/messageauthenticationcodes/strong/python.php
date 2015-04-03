<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\messageauthenticationcodes\strong;

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
        HMAC                          |
        CMAC                          |
        GMAC                          |
        oauth1\.SIGNATURE_HMAC         
`u       
EOT
;
    }
}