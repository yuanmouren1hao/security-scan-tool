<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\Encryption\unknow;

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
        DESedeWrap                  |
        ECIES                       |
        PBE                         |
        RC4                         |
        RC5                         |
        CBC                         |
        CFB                         |
        CFBx                        |
        CTR                         |
        CTS                         |
        ECB                         |
        OFB                         |
        OFBx                        |
        PCBC                        |
        ISO10126Padding             |
        OAEPPadding                 |
        OAEPWith.+And.+Padding      |
        SSL3Padding                 |
        blowfish                    |
        ARCFOUR                     |
        DESede                      |
        PBEWith.+And.+              |
        Cipher.getInstance\(        
`u       
EOT
;
    }
}