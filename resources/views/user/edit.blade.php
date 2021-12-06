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
        <form action="{{ route('user.update', $user) }}" method="POST" class="bg-white overflow-hidden shadow-xl-sm:rounded-lg p-8 px-3 py-3">
            <div class="mb-4">
                <label for="" class="block text-gray-700 text-sm font-bold mb-2">
                    Nombre *
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline"
                id="nombre" type="text" name="name" value="{{ old('name', $user->name) }}">
                @error('name')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="" class="block text-gray-700 text-sm font-bold mb-2">
                    Correo *
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline"
                id="correo" type="text" name="email" value="{{ old('email', $user->email) }}">
            </div>
            @csrf
            @method('PUT')
            <input type="submit" value="actualizar">
        </form>   
    </div> 
</x-app-layout>