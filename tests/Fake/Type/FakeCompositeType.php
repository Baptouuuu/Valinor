<?php

declare(strict_types=1);

namespace CuyZ\Valinor\Tests\Fake\Type;

use CuyZ\Valinor\Type\CompositeType;
use CuyZ\Valinor\Type\Type;

final class FakeCompositeType implements CompositeType
{
    /** @var list<Type> */
    private array $types;

    /**
     * @no-named-arguments
     */
    public function __construct(Type ...$types)
    {
        $this->types = $types;
    }

    public function traverse(): array
    {
        return $this->types;
    }

    public function accepts(mixed $value): bool
    {
        return true;
    }

    public function matches(Type $other): bool
    {
        return true;
    }

    public function nativeType(): Type
    {
        return $this;
    }

    public function toString(): string
    {
        return 'FakeCompositeType';
    }
}
