
        <form  action="{{ route('skill.store') }}"
        method="POST">
        <div class="form-row text-center">
                <div class="col col-12 col-md-6 text-center m-auto">
                    <label class="text-gray-700 text-sm fw-bold mb-2 mt-3" >
                    Habilidad Técnica
                    </label>
                    <input class="col col-12" id="name" type="text"  name="name" class="form-control" placeholder=" agregar habilidad técnica" required>
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    @error('Habilidad Técnica')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col col-12 col-md-6 text-center m-auto">
                    <label class="text-gray-700 text-sm fw-bold mb-2 mt-3" >
                    Porcentaje
                    </label>
                    <input class="col col-12" id="percent" type="text"  name="percent" class="form-control" placeholder="agregar porcentaje" required>
                    <input type="hidden" name="percent" value="{{ $user->percent }}">
                    @error('porcentaje')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col col-12 col-md-6 text-center m-auto">
                    <label class="text-gray-700 text-sm fw-bold mb-2 mt-3" >
                    Habilidad Profesional
                    </label>
                    <input class="col col-12" id="professionalname" type="text"  name="percent" class="form-control" placeholder="agregar habilidad profesional" required>
                    <input type="hidden" name="professionalname" value="{{ $user->professionalname }}">
                    @error('Habilidad Profesional')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col col-12 col-md-6 text-center m-auto">
                    <label class="text-gray-700 text-sm fw-bold mb-2 mt-3" >
                    Porcentaje
                    </label>
                    <input class="col col-12" id="professionalpercent" type="text"  name="professionalpercent" class="form-control" placeholder="agregar porcentaje" required>
                    <input type="hidden" name="professionalname" value="{{ $user->professionalname }}">
                    @error('porcentaje')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                @csrf
                <button class="btn-success text-white btn btn-lg mt-3 mb-5 p-2 fw-bold" type="submit" class="site-btn mt-3">AGREGAR</button>
            </div>
        </form>
        