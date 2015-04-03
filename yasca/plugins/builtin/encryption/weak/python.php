<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\Encryption\weak;

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
        (DES|ARC2|XOR)\.new                      |
        enctype\s*=\s*(\'|\")DES(\'|\")          |
        algos\[(\'|\")(DES|MD5)(\'|\")\]         
`u       
EOT
;
    }
}