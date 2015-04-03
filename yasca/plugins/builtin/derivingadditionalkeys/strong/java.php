<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\derivingadditionalkeys\strong;

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
	 PBKDF2WithHmacSHA1
`u       
EOT
;
    }
}