<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\messageauthenticationcodes\unknow;

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
	 PBEWith.+|HmacSHA1
`u       
EOT
;
    }
}