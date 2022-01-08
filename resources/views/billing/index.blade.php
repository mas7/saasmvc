<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're on free plan!



                    <div class="grid gap-4 grid-cols-3 mt-4">
                        @forelse ($plans as $plan)
                            <div>
                                <h2 class="text-xl">{{ $plan->name }}</h2>
                                ${{ round($plan->price / 100, 2) }} / month
                                <br>
                                <x-button class="mt-4">Subscribe</x-button>
                            </div>
                        @empty
                            <div>
                                <h2>No plans at the moment.</h2>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
