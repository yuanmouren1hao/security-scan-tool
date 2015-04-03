<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keywrapping\strong;

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
        SymmetricKey\((\'|\")AES(\'|\")         |
        algorithm\s*=\s*(\'|\")AES(\'|\")
`u       
EOT
;
    }
}