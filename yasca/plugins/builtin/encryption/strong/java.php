<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\Encryption\strong;

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
                AES              |
                AESWrap          |
                PKCS1Padding     |
                PKCS5Padding     
`u       
EOT
;
    }
}