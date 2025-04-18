<?php
/**
 * This file is part of the Cloudinary PHP package.
 *
 * (c) Cloudinary
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cloudinary\Transformation;

use Cloudinary\ArrayUtils;
use Cloudinary\Transformation\Qualifier\BaseQualifier;
use InvalidArgumentException;

/**
 * Class QualifierMultiValue
 *
 * This class represents a complex value of the cloudinary transformation qualifier.
 *
 * @used-by BaseQualifier
 */
class QualifierMultiValue extends BaseComponent
{
    /**
     * @var string VALUE_DELIMITER Serialisation delimiter in case value is an array.
     */
    protected const VALUE_DELIMITER = ':';

    /**
     * @var string KEY_VALUE_DELIMITER Serialisation delimiter between the key and the value.
     */
    protected const KEY_VALUE_DELIMITER = '_';

    /**
     * @var int MIN_ARGUMENTS Minimum number of arguments required for the qualifier. 0 == all optional.
     */
    public const MIN_ARGUMENTS = 0;

    /**
     * @var int MAX_ARGUMENTS Maximum number of arguments allowed for the qualifier. 0 == unlimited.
     */
    public const MAX_ARGUMENTS = 0;

    /**
     * @var array Array of validators to run during construction.
     */
    protected array $validators = [];

    /**
     * @var array $argumentOrder Used for serialisation order .Can be defined in the derived class.
     */
    protected array $argumentOrder = [];

    /**
     * @var array $arguments The arguments (unnamed).
     */
    protected array $arguments = [];

    /**
     * @var array $arguments The named arguments.
     */
    protected array $namedArguments = [];

    /**
     * QualifierMultiValue constructor.
     *
     * @param $arguments
     */
    public function __construct(...$arguments)
    {
        parent::__construct();

        $this->setArguments(...$arguments);
    }

    /**
     * Sets the arguments.
     *
     * @param mixed $arguments The arguments to set.
     *
     *
     * @internal
     */
    public function setArguments(...$arguments): static
    {
        $arguments = ArrayUtils::flatten($arguments, true);

        if ($arguments instanceof static) {
            $this->arguments = clone $arguments->arguments;

            return $this;
        }

        if (static::MIN_ARGUMENTS > count($arguments)) {
            throw new InvalidArgumentException(
                'Qualifier "' . static::getName() . '" must have at least ' . static::MIN_ARGUMENTS . ' arguments(s)'
            );
        }

        if (static::MAX_ARGUMENTS !== 0 && count($arguments) > static::MAX_ARGUMENTS) {
            throw new InvalidArgumentException(
                'Qualifier "' . static::getName() . '" can have no more than ' . static::MAX_ARGUMENTS . ' arguments(s)'
            );
        }


        foreach ($this->validators as $validator) {
            $validator->validate(...$arguments);
        }

        $this->arguments = $arguments;

        return $this;
    }

    /**
     * Adds values.
     *
     * @param mixed $values The values to add.
     *
     *
     * @internal
     */
    public function addValues(...$values): static
    {
        $this->arguments = array_merge($this->arguments, $values);

        return $this;
    }

    /**
     * Sets a value.
     *
     * @param BaseComponent|null $value The value to set.
     *
     * @return $this
     *
     * @internal
     */
    public function setValue(?BaseComponent $value = null): static
    {
        return $this->setSimpleValue($value?->getName(), $value);
    }

    /**
     * Sets a simple unnamed value specified by name(for uniqueness) and the actual value.
     *
     * @param string|null $name  The name of the argument.
     * @param mixed|null  $value The value of the argument.
     *
     * @return $this
     *
     * @internal
     */
    public function setSimpleValue(?string $name, mixed $value = null): static
    {
        ArrayUtils::addNonEmpty($this->arguments, $name, $value);

        return $this;
    }

    /**
     * Gets an argument value by name.
     *
     * @param string $name The name of the argument.
     *
     *
     * @internal
     */
    public function getSimpleValue(string $name): mixed
    {
        return ArrayUtils::get($this->arguments, $name);
    }

    /**
     * Sets a named value.
     *
     * @param BaseComponent|null $value The value to set.
     *
     * @return $this
     *
     * @internal
     */
    public function setNamedValue(?BaseComponent $value = null): static
    {
        return $this->setSimpleNamedValue($value ? $value->getName() : null, $value);
    }

    /**
     * Sets named values.
     *
     * @param BaseComponent ...$values The values to set.
     *
     * @return $this
     *
     * @internal
     */
    public function setNamedValues(BaseComponent ...$values): static
    {
        foreach ($values as $index => $value) {
            if ($index === 0) {
                $this->setSimpleNamedValue($value ? $value::getName() : null, $value);
            } else {
                $this->addValues($value);
            }
        }

        return $this;
    }

    /**
     * Sets a simple named value specified by name (for uniqueness) and the actual value.
     *
     * @param string     $name  The name of the argument.
     * @param mixed|null $value The value of the argument.
     *
     * @return $this
     *
     * @internal
     */
    public function setSimpleNamedValue(string $name, mixed $value = null): static
    {
        ArrayUtils::addNonEmpty($this->namedArguments, $name, $value);

        return $this;
    }

    /**
     * Sets in the inner order of the arguments.
     *
     * @param array $argumentOrder A list of argument keys in the correct order.
     *
     * @return $this
     *
     * @internal
     */
    public function setArgumentOrder(array $argumentOrder): static
    {
        if (! empty($argumentOrder)) {
            $this->argumentOrder = $argumentOrder;
        }

        return $this;
    }

    /**
     * Serializes to string.
     *
     * @return string
     */
    public function __toString()
    {
        foreach ($this->arguments as $argumentKey => $argumentValue) {
            if ($argumentValue instanceof EffectName) {
                $this->argumentOrder[] = $argumentKey;
            }
        }

        $values      = ArrayUtils::implodeFiltered(
            static::VALUE_DELIMITER,
            ArrayUtils::sortByArray($this->arguments, $this->argumentOrder)
        );
        $namedValues = ArrayUtils::implodeAssoc(
            ArrayUtils::sortByArray($this->namedArguments, $this->argumentOrder),
            static::VALUE_DELIMITER,
            static::KEY_VALUE_DELIMITER
        );

        return ArrayUtils::implodeFiltered(static::VALUE_DELIMITER, [$values, $namedValues]);
    }

    /**
     * Serializes to json.
     *
     */
    public function jsonSerialize(): array
    {
        return ArrayUtils::flatten(
            ArrayUtils::safeFilter(ArrayUtils::mergeNonEmpty($this->arguments, $this->namedArguments))
        );
    }
}
