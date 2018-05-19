<?php

/**
 * This file is part of PhpUnitGen.
 *
 * (c) 2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace PhpUnitGen\Parser;

use PhpParser\Error;
use PhpParser\Parser;
use PhpUnitGen\Exception\ParseException;
use PhpUnitGen\Model\ModelInterface\PhpFileModelInterface;
use PhpUnitGen\Model\PhpFileModel;
use PhpUnitGen\Parser\NodeParser\PhpFileNodeParser;
use PhpUnitGen\Parser\ParserInterface\PhpParserInterface;

/**
 * Class PhpParser.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
class PhpParser implements PhpParserInterface
{
    /**
     * @var Parser $phpParser A parser to parse php code as a string.
     */
    private $phpParser;

    /**
     * @var PhpFileNodeParser $phpFileNodeParser A php file node parser to parse php nodes.
     */
    private $phpFileNodeParser;

    /**
     * PhpFileParser constructor.
     *
     * @param Parser            $phpParser         The php code parser to use.
     * @param PhpFileNodeParser $phpFileNodeParser The php file node parser to use.
     */
    public function __construct(
        Parser $phpParser,
        PhpFileNodeParser $phpFileNodeParser
    ) {
        $this->phpParser         = $phpParser;
        $this->phpFileNodeParser = $phpFileNodeParser;
    }

    /**
     * {@inheritdoc}
     */
    public function invoke(string $code): PhpFileModelInterface
    {
        try {
            $nodes = $this->phpParser->parse($code);
        } catch (Error $error) {
            throw new ParseException('Unable to parse given php code (maybe your code contains errors)');
        }

        $phpFileModel = new PhpFileModel();
        $this->phpFileNodeParser->preParseUses($nodes, $phpFileModel);

        $this->phpFileNodeParser->parseSubNodes($nodes, $phpFileModel);

        return $phpFileModel;
    }
}
