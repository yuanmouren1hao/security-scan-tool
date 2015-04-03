<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\digitalsignatures\unknow;

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
	 PKCS1_PSS\.new
`u       
EOT
;
    }
}