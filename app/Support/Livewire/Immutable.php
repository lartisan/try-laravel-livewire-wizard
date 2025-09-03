<?php

namespace App\Support\Livewire;

use Attribute;
use Livewire\Features\SupportAttributes\Attribute as LivewireAttribute;

/**
 * Large Livewire public properties can be expensive to compute and watch on the frontend.
 * However, their previous state may still be needed on the backend on subsequent requests.
 * This attribute allows you to mark a property as being immutable on the frontend, but
 * continue to have full access to it on the backend.
 *
 * Using this attribute will significantly reduce the cpu and memory
 * usage of your Livewire component on the client side.
 */
#[Attribute]
class Immutable extends LivewireAttribute
{
    public static array $targeted_instances = [];

    public function dehydrate()
    {
        if (! is_object($this->component->{$this->subName})) {
            return;
        }

        array_push(
            static::$targeted_instances,
            spl_object_id($this->component->{$this->subName})
        );
    }
}
