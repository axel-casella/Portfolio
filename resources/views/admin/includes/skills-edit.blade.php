@foreach ($user->skill as $skill)
        <form  action="{{ route('skill.update', $skill) }}"
        method="POST">
        <div class="form-row">
                <div class="col-md-6">
                    <label class="text-gray-700 text-sm fw-bold mb-2 mt-3" >
                        Habilidades
                    </label>
                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $skill->name) }}">
                </div>
                <div class="col-md-6">
                    <label class="text-gray-700 text-sm fw-bold mb-2 mt-3" >
                        Porcentaje
                    </label>
                    <input id="percent" type="text"  name="percent" class="form-control" value="{{ old('percent', $skill->percent) }}">
                </div>
            </div>
            @csrf
            @method('PUT')
            <button class="btn-warning btn btn-lg mt-1 mb-1" type="submit" class="site-btn mt-3">Actualizar</button>
        </form>
        <form action="{{ route('skill.destroy', $skill) }}"
        method="POST">
        <button class="btn-danger btn btn-lg mt-1 mb-1" type="submit" class="site-btn mt-3">Eliminar</button>
        @csrf
        @method('DELETE')
        </form>
        @endforeach