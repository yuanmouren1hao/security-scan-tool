<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\keyagreement\strong;

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
        (\b|\s+|\'|\"|\.)DH(\b|\s+|\'|\"|\.)                  |
        (\b|\s+|\'|\"|\.)MQV(\b|\s+|\'|\"|\.)                 |
        Diffie-Hellman      
`u       
EOT
;
    }
}