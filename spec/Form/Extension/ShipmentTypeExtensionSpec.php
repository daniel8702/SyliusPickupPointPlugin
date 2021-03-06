<?php

declare(strict_types=1);

namespace spec\Setono\SyliusPickupPointPlugin\Form\Extension;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Setono\SyliusPickupPointPlugin\Form\Extension\ShipmentTypeExtension;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class ShipmentTypeExtensionSpec extends ObjectBehavior
{
    public function it_is_initializable(): void
    {
        $this->shouldHaveType(ShipmentTypeExtension::class);
    }

    public function it_is_an_abstract_type_extension_form(): void
    {
        $this->shouldHaveType(AbstractTypeExtension::class);
    }

    public function it_takes_arguments(FormBuilderInterface $builder): void
    {
        $builder->add(Argument::type('string'), Argument::type('string'), Argument::any())->willReturn($builder);
        $this->buildForm($builder, []);
    }
}
