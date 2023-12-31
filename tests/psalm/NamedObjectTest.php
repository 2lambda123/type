<?php

declare(strict_types=1);

namespace Typhoon\Type;

/** @psalm-check-type-exact $_stdClass = \stdClass */
$_stdClass = extractType(new NamedObjectType(\stdClass::class));

/** @var NamedObjectType<\ArrayObject<int, string>> */
$arrayObjectType = new NamedObjectType(\ArrayObject::class, [IntType::type, StringType::type]);
/** @psalm-check-type-exact $_arrayObject = \ArrayObject<int, string> */
$_arrayObject = extractType($arrayObjectType);

function testObjectIsCovariant(NamedObjectType $_type): void {}

testObjectIsCovariant(new NamedObjectType(\stdClass::class));
