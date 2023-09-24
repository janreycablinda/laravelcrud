<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="mb-4">
            <x-primary-button>{{ __('Create') }}</x-primary-button>
          </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead class="text-left bg-slate-100">
                            <tr>
                              <th>Product Name</th>
                              <th>Brand</th>
                              <th>Branch</th>
                              <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Shining Star</td>
                              <td>Earth, Wind, and Fire</td>
                              <td>1975</td>
                              <th>Action</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
