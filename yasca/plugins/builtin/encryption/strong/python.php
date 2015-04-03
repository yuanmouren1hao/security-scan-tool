<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\Encryption\strong;

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
	 =\s*AES\.new\(                    |
     SKIPJACK                          |
     enctype\s*=\s*(\'|\")AES(\'|\")                        
`u             
EOT
;
    }
}