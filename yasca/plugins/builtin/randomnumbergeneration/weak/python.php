<?
declare(encoding = 'UTF-8');
namespace Yasca\Plugins\BuiltIn\randomnumbergeneration\weak;

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
        random\.(seed            |
                 getstate        |
                 setstate        |
                 jumpahead       |
                 getrandbits     |
                 randrange       |
                 randint         |
                 choice          |
                 shuffle         |
                 sample          |
                 random          |
                 uniform         |
                 triangular      |
                 betavariate     |
                 expovariate     |
                 gammavariate    |
                 gauss           |
                 lognormvariate  |
                 normalvariate   |
                 vonmisesvariate |
                 paretovariate   |
                 weibullvariate  )
`u       
EOT
;
    }
}