<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\messageauthenticationcodes\unknow;

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
        HMAC\.new       |
        ccm             |
        gcm
`u       
EOT
;
    }
}