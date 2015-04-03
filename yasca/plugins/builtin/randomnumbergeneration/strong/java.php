<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\randomnumbergeneration\strong;

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
        SHA1PRNG          |
        SecureRandom\(     
`u       
EOT
;
    }
}