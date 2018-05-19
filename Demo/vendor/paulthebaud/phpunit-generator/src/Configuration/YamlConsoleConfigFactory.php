<?php

/**
 * This file is part of PhpUnitGen.
 *
 * (c) 2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace PhpUnitGen\Configuration;

use PhpUnitGen\Exception\InvalidConfigException;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

/**
 * Class YamlConsoleConfigFactory.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
class YamlConsoleConfigFactory extends AbstractConsoleConfigFactory
{
    /**
     * {@inheritdoc}
     */
    protected function decode(string $configPath): array
    {
        try {
            $configArray = Yaml::parse(file_get_contents($configPath));
        } catch (ParseException $exception) {
            throw new InvalidConfigException(sprintf(
                'Unable to parse YAML config: %s',
                $exception->getMessage()
            ));
        }
        if (! is_array($configArray)) {
            throw new InvalidConfigException('Invalid YAML config');
        }
        return $configArray;
    }
}
