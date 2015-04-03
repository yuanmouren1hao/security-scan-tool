<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\randomnumbergeneration\strong;

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
        os\.urandom                                                |
        FortunaAccumulator\.(FortunaAccumulator|FortunaPool)       |
        FortunaGenerator\.AESGenerator                             |
        _UserFriendlyRNG                                           |
        Crypto\.Random\.(OSRNG|random)                             |
        from\s+Crypto\s+import\s+Random                            |
        from\s+Crypto\.Random\s+import\s+random                    |
        random\.(SystemRandom|random|StrongRandom)                 |
        (Hash|HMAC|CTR|Dual_EC)_DRBG                               
`u       
EOT
;
    }
}