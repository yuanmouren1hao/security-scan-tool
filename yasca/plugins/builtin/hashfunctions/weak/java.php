<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\hashfunctions\weak;

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
            SHA\-1        |
            CRAM\-MD5     |
            DIGEST\-MD5   |
            md2           |
            md5          
`u       
EOT
;
    }
}