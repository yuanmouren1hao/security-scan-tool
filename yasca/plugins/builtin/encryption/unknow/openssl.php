<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\Encryption\unknow;

final class openssl extends \Yasca\Plugin
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
        (\b|\s+|\'|\")bf(\b|-.{3})(\b|\s+|\'|\")        |
        des3                                            |
        des-ede3(\b|-.{3,4})                            |
        idea(\b|-.{3})                                  |
        seed(\b|-.{3})                                  |
        cast5(\b|-.{3})                                 |
        (\b|\s+|\'|\"|\.)cast(\b|-.{3}) (\b|\s+|\'|\"|\.)|
        rc4                                             |
        rc4-40                                          |
        rc4-hmac-md5                                    |
        openssl\s+(enc|dsa|rsa|gendsa|genrsa|pkcs12)    
`u       
EOT
;
    }
}