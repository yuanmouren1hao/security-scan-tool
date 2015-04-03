<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\hashfunctions\weak;

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
        (\b|\s+|\'|\")sha(\b|\s+|\'|\")     |
        sha1                                |
        md2                                 |
        md5                                 |
        md4
`u       
EOT
;
    }
}