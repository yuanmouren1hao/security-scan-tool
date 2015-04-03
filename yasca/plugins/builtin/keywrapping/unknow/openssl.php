<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keywrapping\unknow;

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
        openssl\s+(dsa|rsa)\s+\-\-passout       |
        openssl\s+(gendsa|genrsa|pkcs12)
`u       
EOT
;
    }
}