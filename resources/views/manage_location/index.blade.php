<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Locations') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="mb-4">
            <a href="{{ route('manage_location.create') }}">
                <x-primary-button>{{ __('Create') }}</x-primary-button>
            </a>
          </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <table class="table-auto w-full">
                        <thead class="text-left bg-slate-100">
                            <tr>
                              <th>Business Locations</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($business_location as $location)
                            <tr class="text-left">
                                <td>{{ $location->name }}</td>
                                <td class="flex gap-2">
                                    <a href="{{ route('manage_location.edit', $location->id) }}">
                                        <x-primary-button>{{ __('Edit') }}</x-primary-button>
                                    </a>
                                    <form method="POST" action="{{ route('manage_location.destroy', $location->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $business_location->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
