@foreach ($user->workexperience as $workexperience)
@endforeach
<div class="container">
        <div class="row justify-content-center text-center">
            <h2 class="col col-12 text-center m-auto mt-5">Experiencia Laboral</h2>
            <h6 class="col col-12 text-center m-auto mt-1">"WORK EXPERIENCE"</h6>
            <form action="{{ route('experience.update', $workexperience) }}"
            enctype="multipart/form-data"  
            method="POST"
            class="row justify-content-center mt-5">
                    @foreach ($user->workexperience as $workexperience)
                    <div class="row border p-3 m-2">
                    <div class="col col-12 col-lg-2 col-md-2 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Trabajo
                        </label>
                            <input id="work_name" type="text"  name="work_name" class="form-control" value="{{ old('work_name', $workexperience->work_name) }}">
                            @error('work_name')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>          
                <div class="col col-12 col-lg-2 col-md-2 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Empresa
                    </label>
                        <input id="work_place" type="text"  name="work_place" class="form-control" value="{{ old('work_place', $workexperience->work_place) }}">
                        @error('work_place')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="col col-12 col-lg-2 col-md-2 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Inicio
                        </label>
                            <input id="start_work" type="text"  name="start_work" class="form-control" value="{{ old('start_work', $workexperience->start_work) }}">
                            @error('start_work')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="col col-12 col-lg-2 col-md-2 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Finalización
                        </label>
                            <input id="finish_work" type="text"  name="finish_work" class="form-control" value="{{ old('finish_work', $workexperience->finish_work) }}">
                            @error('finish_work')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Responsabilidad
                        </label>
                            <input id="responsibility_work" type="text"  name="responsibility_work" class="form-control" value="{{ old('responsibility_work', $workexperience->responsibility_work) }}">
                            @error('responsibility_work')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>
                    </div>
                    @endforeach
                    @csrf
                    @method('PUT')
                    <div class="col col-12 mt-5">
                    <button class="btn-warning btn btn-lg mt-3 mb-5" type="submit" class="site-btn mt-3">Guardar Cambios</button>
                    </div>
            </form>       
        </div>
    </div>