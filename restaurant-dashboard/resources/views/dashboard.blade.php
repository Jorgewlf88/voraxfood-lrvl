<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h3 class="text-lg font-semibold">Pedidos Pendientes</h3>
                            <p class="text-3xl font-bold">{{ $pendingOrders }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Próximas Reservas</h3>
                            <p class="text-3xl font-bold">{{ $upcomingReservations }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>