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

use PhpUnitGen\Configuration\ConfigurationInterface\ConsoleConfigInterface;
use PhpUnitGen\Exception\InvalidConfigException;

/**
 * Class AbstractConsoleConfigFactory.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
abstract class AbstractConsoleConfigFactory
{
    /**
     * {@inheritdoc}
     */
    public function invoke(string $configPath): ConsoleConfigInterface
    {
        return new ConsoleConfig($this->decode($configPath));
    }

    /**
     * {@inheritdoc}
     */
    public function invokeDir(string $configPath, string $sourceDir, string $targetDir): ConsoleConfigInterface
    {
        $configArray          = $this->decode($configPath);
        $configArray['dirs']  = [
            $sourceDir => $targetDir
        ];
        $configArray['files'] = [];

        return new ConsoleConfig($configArray);
    }

    /**
     * {@inheritdoc}
     */
    public function invokeFile(string $configPath, string $sourceFile, string $targetFile): ConsoleConfigInterface
    {
        $configArray          = $this->decode($configPath);
        $configArray['dirs']  = [];
        $configArray['files'] = [
            $sourceFile => $targetFile
        ];

        return new ConsoleConfig($configArray);
    }

    /**
     * Decode a configuration file to get a configuration array.
     *
     * @param string $configPath The configuration file path.
     *
     * @return array The decoded configuration array.
     *
     * @throws InvalidConfigException If the configuration is invalid.
     */
    abstract protected function decode(string $configPath): array;
}
