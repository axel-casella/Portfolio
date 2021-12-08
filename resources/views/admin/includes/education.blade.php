@foreach ($user->education as $education)
@endforeach
<div class="container">
        <div class="row justify-content-center text-center">
            <h2 class="col col-12 text-center m-auto mt-5">Educación</h2>
            <h6 class="col col-12 text-center m-auto mt-1">"EDUCATION"</h6>
            <form action="{{ route('education.update', $education) }}"
            enctype="multipart/form-data"  
            method="POST"
            class="row justify-content-center mt-5">
                <div class="col col-12 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Titular de la Sección
                    </label>
                        <input id="title_aboutme" type="text"  name="title_aboutme" class="form-control" value="{{ old('title_aboutme', $user->title_aboutme) }}">
                        @error('title_aboutme')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                </div>
                    @foreach ($user->education as $education)
                    <div class="row border p-3 m-2">
                    <div class="col col-12 col-lg-2 col-md-2 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Institución
                        </label>
                            <input id="school_name" type="text"  name="school_name" class="form-control" value="{{ old('school_name', $education->school_name) }}">
                            @error('school_name')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>        
                <div class="col col-12 col-lg-2 col-md-2 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Título
                    </label>
                        <input id="degree" type="text"  name="degree" class="form-control" value="{{ old('degree', $education->degree) }}">
                        @error('degree')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="col col-12 col-lg-2 col-md-2 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Inicio
                        </label>
                            <input id="start_date" type="text"  name="start_date" class="form-control" value="{{ old('start_date', $education->start_date) }}">
                            @error('start_date')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="col col-12 col-lg-2 col-md-2 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Finalización
                        </label>
                            <input id="finish_date" type="text"  name="finish_date" class="form-control" value="{{ old('finish_date', $education->finish_date) }}">
                            @error('finish_date')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Descripción
                        </label>
                            <input id="description" type="text"  name="description" class="form-control" value="{{ old('description', $education->description) }}">
                            @error('description')
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