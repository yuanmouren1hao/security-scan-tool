<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\Encryption\weak;

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
        des[^3]     |
        NoPadding   |
        rc2         
`u       
EOT
;
    }
}