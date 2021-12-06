
        <form  action="{{ route('skill.store') }}"
        method="POST">
        <div class="form-row">
                <div class="col-md-6">
                    <label class="text-gray-700 text-sm fw-bold mb-2 mt-3" >
                        Nueva Habilidad
                    </label>
                    <input class="col col-12" id="name" type="text"  name="name" class="form-control" placeholder="Agregar Habilidad">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                </div>
                <div class="col-md-6">
                    <label class="text-gray-700 text-sm fw-bold mb-2 mt-3" >
                        Nueva Porcentaje
                    </label>
                    <input class="col col-12" id="percent" type="text"  name="percent" class="form-control" placeholder="Agregar porcentaje">
                    <input type="hidden" name="percent" value="{{ $user->percent }}">
                </div>
            </div>
            @csrf
            <button class="btn-success text-white btn btn-lg mt-1 mb-1" type="submit" class="site-btn mt-3">Agregar</button>
        </form>
        