<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="mb-4">
            <x-link-button :route="route('users.create')">{{ __('Create') }}</x-link-button>
          </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                    <table class="table-auto w-full">
                        <thead class="text-left bg-slate-100">
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <th class="flex gap-2">
                                        <!-- <a href="{{ route('users.edit', $user->id) }}">
                                            <x-primary-button>{{ __('Edit') }}</x-primary-button>
                                        </a> -->
                                        <x-link-button :route="route('users.edit', $user->id)">{{ __('Edit') }}</x-link-button>
                                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                        </form>
                                    </th>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
