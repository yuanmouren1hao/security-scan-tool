<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\hashfunctions\strong;

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
        SHA\d{3}\.new                                       |
        form\s+hashlib\s+import\s+sha\d{3}                  |
        hashlib\.sha\d{3}                                   |
        passlib\.hash\.(sha\d{3}_crypt|bcrypt_sha256)       
`u       
EOT
;
    }
}