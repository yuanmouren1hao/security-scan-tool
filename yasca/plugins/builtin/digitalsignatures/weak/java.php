<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\digitalsignatures\weak;

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
	 (SHA1|NONE|MD2|MD5)with(RSA|DSA|ECDSA)
`u       
EOT
;
    }
}