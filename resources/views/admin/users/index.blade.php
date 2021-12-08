@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row justify-content-center">
        @foreach ($users as $user)
            <div class="card m-2" style='width: 18rem;'>
                <div class="card-body">
                @if ($user->image)    
                <img class="card-img-top" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                @else
                <img class="card-img-top mb-3" src="{{asset('assets/images/hero.png')}}" alt="Image">
                @endif    
                <h5 class="card-title">{{ $user->uppercase }}</h5>
                <p class="card-text">{{ $user->title_job }}</p>
                <form action="{{ route('user.destroy', $user) }}" method="POST">
                    <a href="{{ route('user.edit', $user) }}" class="bg-warning text-decoration-none p-2 rounded text-white fw-bold">EDITAR</a>
                    @csrf
                    @method('DELETE')
                    <input
                        type="submit"
                        value="ELIMINAR"
                        class="bg-danger p-1 rounded text-white fw-bold"
                        onclick="return confirm('¿Desea eliminar este usuario...?')"
                    />
                </form>
                </div>
            </div>

        @endforeach
    </div>
</div>
@endsection
