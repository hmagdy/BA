<?php

/**
 * This file is part of PhpUnitGen.
 *
 * (c) 2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace PhpUnitGen\Model\ModelInterface;

use Doctrine\Common\Collections\Collection;
use PhpUnitGen\Annotation\MockAnnotation;
use PhpUnitGen\Model\PropertyInterface\ClassLikeInterface;
use PhpUnitGen\Model\PropertyInterface\NameInterface;
use PhpUnitGen\Model\PropertyInterface\NamespaceInterface;

/**
 * Interface PhpFileModelInterface.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
interface PhpFileModelInterface extends NameInterface, NamespaceInterface, ClassLikeInterface
{
    /**
     * @return int The sum of functions number for all classes, traits (and global functions).
     */
    public function getTestableFunctionsCount(): int;

    /**
     * @return int The sum of functions number for all interfaces.
     */
    public function getInterfacesFunctionsCount(): int;

    /**
     * Get the full name of a class (current namespace + name).
     *
     * @param string $name The class name.
     *
     * @return string The full name.
     */
    public function getFullNameFor(string $name): string;

    /**
     * Add a new concrete PHP import for tests skeleton.
     *
     * @param string $fullName The full name of this import.
     * @param string $name     The name of the class.
     */
    public function addConcreteUse(string $fullName, string $name): void;

    /**
     * @return string[] Imports needed for tests skeletons.
     */
    public function getConcreteUses(): array;

    /**
     * Add a new PHP import.
     *
     * @param string $name     The name of this import (last component of name, or alias).
     * @param string $fullName The full name of this import.
     */
    public function addUse(string $name, string $fullName): void;

    /**
     * Check if the file contains a specific import.
     *
     * @param string $name The import name to check.
     *
     * @return bool True if the file contains this import.
     */
    public function hasUse(string $name): bool;

    /**
     * Get the full name for a specific import.
     *
     * @param string $name The name of this import.
     *
     * @return string The full name if the import exists.
     */
    public function getUse(string $name): string;

    /**
     * @param ClassModelInterface $class The class to add.
     */
    public function addClass(ClassModelInterface $class): void;

    /**
     * @return ClassModelInterface[]|Collection All classes contained in the file.
     */
    public function getClasses(): Collection;

    /**
     * @param TraitModelInterface $trait The trait to add.
     */
    public function addTrait(TraitModelInterface $trait): void;

    /**
     * @return TraitModelInterface[]|Collection All traits contained in the file.
     */
    public function getTraits(): Collection;

    /**
     * @param InterfaceModelInterface $interface The interface to add.
     */
    public function addInterface(InterfaceModelInterface $interface): void;

    /**
     * @return InterfaceModelInterface[]|Collection All interfaces contained in the file.
     */
    public function getInterfaces(): Collection;

    /**
     * @return InterfaceModelInterface[]|TraitModelInterface[]|ClassModelInterface[]|Collection All interfaces, traits
     *                                                                                          and classes in the
     *                                                                                          file.
     */
    public function getClassLikeCollection(): Collection;

    /**
     * @return Collection|MockAnnotation[] The mock annotations.
     */
    public function getMockAnnotations(): Collection;
}
