<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\randomnumbergeneration\strong;

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
        Rand
        openssl\s+rand
`u       
EOT
;
    }
}