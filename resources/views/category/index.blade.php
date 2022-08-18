<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>
    
    <div class="mt-8">
        
    </div>
    <div class="flex flex-col mt-8 px-12">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <div class="flex items-center justify-between">
                <div class="w-50 p-2">
                    <x-alink class="w-full flex justify-center bg-green-600 hover:bg-green-500 active:bg-green-800 py-4" href="{{ route('dashboard') }}">
                        {{ __('Back to Dashboard') }}
                    </x-alink>
                </div>
                <div class="w-44 p-2">
                    
                    <x-modal>
                    <form method="POST" action="{{ route('category.create') }}">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-1 gap-6 mt-4">
                        <!-- <div class="flex items-center justify-center gap-6 mt-4"> -->
                            <div>
                                <x-label class="text-gray-700" for="name">{{ __('Store Name') }}</x-label>
                                <x-input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" id="name" name="name" />
                            </div>

                            <div>
                                <x-label class="text-gray-700" for="domain">{{ __('Domain Name') }}</x-label>
                                <x-input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" id="domain" name="domain" />
                            </div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="button" @click="show=false" class="px-4 py-2 mx-2 text-white bg-red-600 rounded">Cancel</button>
                            <button type="submit" class="px-4 py-2 text-white bg-green-600 rounded">Save</button>
                        </div>
                    </form>
                    </x-modal>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col mt-8 px-12">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Category Name</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Store Name</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach($categories as $cat)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                    <a href="#" class="text-blue-600 hover:text-blue-500">
                                        {{ $cat->name }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    {{ $cat->stores }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    
                                        <span class="text-green-600">Active</span>
                                    
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    <a href="#" class="text-blue-600 hover:text-blue-500">
                                        Edit
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    
                                        <button type="submit" class="text-red-600 hover:text-red-500">
                                            Delete
                                        </button>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-app-layout>
