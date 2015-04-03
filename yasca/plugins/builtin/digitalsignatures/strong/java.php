<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\digitalsignatures\strong;

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
        DSA                          |
        RSA                          |
        (\b|\s+|\'|\")EC(\b|\s+|\'|\")|
        SHA\D{3}with(RSA|ECDSA)      |
        DH_RSA                       |
        DH_DSA                       |
        EC_EC                        |
        EC_RSA                       
`u       
EOT
;
    }
}