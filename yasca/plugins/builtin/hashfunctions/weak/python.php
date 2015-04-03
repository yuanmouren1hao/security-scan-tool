<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\hashfunctions\weak;

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
        (MD2|MD4|MD5|RIPEMD|SHA)\.new                        |
        from\s+hashlib\s+import\s+(md5|sha1)                 |
        hashlib\.(md5|sha1)                                  |
        passlib\.hash\.(md5_crypt             |              
                        sha1_crypt            |              
                        sun_md5_crypt         |              
                        apr_md5_crypt         |              
                        ldap_md5              |              
                        ldap_salted_md5       |              
                        ldap_sha1             |              
                        ldap_salted_sha1)                    |
        digest\s+=\s+(\'|\")sha1(\'|\")                      |
        default\s+=\s+(\'|\")sha1(\'|\")                     |
        sa\.Enum\((\'|\")sha1(\'|\")                         |
        (\'|\")default(\'|\")\s*\:\s*(\'|\")sha1(\'|\")      |
        hashtype\s*=\s*(\'|\")MD5(\'|\")                     
`u       
EOT
;
    }
}