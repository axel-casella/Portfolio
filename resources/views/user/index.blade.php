<x-app-layout>
    <x-slot name="header">
        <div  class="flex justify-between items-center sm:items-baseline">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Usuarios') }}
            </h2>
        </div>
    </x-slot>
    @if (session('status'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
            <p class="font-bold">Success!</p>
            <p class="text-sm">{{ session('status') }}</p>
            </div>
        </div>
    </div>
    @endif

    <div class="py-12 px-3">
        <div class="max-w-7xl mx-auto bg-white overflow-hidden shadow-xl sm:rounded-lg px-3">
        <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Rol
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <span class="sr-only">Acciones</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $user)
                    <tr id="{{ $user->id }}">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                
                                <div>
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $user->name }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $user->email }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex items-center">
                                
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{ route('user.destroy', $user) }}" method="POST">
                                <a href="{{ route('user.edit', $user) }}" class="anchor-inside-form bg-yellow-400 hover:bg-yellow-500 text-white font-bold px-3 py-1 rounded-l-lg shadow-md">Editar</a>
                                @csrf
                                @method('DELETE')
                                <input 
                                    type="submit" 
                                    value="Eliminar" 
                                    class="bg-red-600 hover:bg-red-800 text-white font-bold px-3 py-1 rounded-r-lg shadow-md"
                                    onclick="return confirm('¿Desea eliminar este usuario...?')"
                                />
                            </form>
                        </td>
                    </tr>
                   @endforeach
                    
                </tbody>
        </table>
    </div>
</div> 
</x-app-layout>