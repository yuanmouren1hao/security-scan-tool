<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\messageauthenticationcodes\strong;

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
	 HmacSHA\d{3}
`u       
EOT
;
    }
}