<?php

use function Livewire\Volt\{state};

state(count: 0);

$increment = fn() => $this->count++;
$decrement = fn() => $this->count--;

?>
<x-app-layout title="counter">
    @volt
        <x-layout-spacing class="mx-auto items-center p-1">

            <x-card.title class="text-center mb-2">Counter</x-card.title>
            <div class="flex gap-3 justify-center mb-6">
                <x-card>
                    <x-card.content>
                        <x-card.title class="mb-2">
                            AlpineJs
                        </x-card.title>
                        <div x-data="{ count: 0 }" class="flex justify-center">
                            <x-button size="icon" @click="count--">
                                <x-lucide-minus class="size-4" />
                            </x-button>
                            <h1 class="text-lg font-bold mx-5" x-text="count"></h1>
                            <x-button size="icon" @click="count++">
                                <x-lucide-plus class="size-4" />
                            </x-button>
                        </div>
                    </x-card.content>
                </x-card>
                <x-card>
                    <x-card.content>
                        <x-card.title class="mb-2">
                            Livewire
                        </x-card.title>
                        <div class="flex justify-center">
                            <x-button size="icon" wire:click="decrement">
                                <x-lucide-minus class="size-4" />
                            </x-button>
                            <h1 class="text-lg font-bold mx-5">{{ $this->count }}</h1>
                            <x-button size="icon" wire:click="increment">
                                <x-lucide-plus class="size-4" />
                            </x-button>
                        </div>
                    </x-card.content>
                </x-card>
            </div>
        </x-layout-spacing>
    @endvolt
</x-app-layout>
