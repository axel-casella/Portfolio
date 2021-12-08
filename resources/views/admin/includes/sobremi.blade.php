@foreach ($user->aboutme as $aboutme)
@endforeach
<div class="container">
        <div class="row justify-content-center text-center">
            <h2 class="col col-12 text-center m-auto mt-5">Acerca de Mi</h2>
            <h6 class="col col-12 text-center m-auto mt-1">"ABOUT ME"</h6>
            <form action="{{ route('aboutme.update', $aboutme) }}"
            enctype="multipart/form-data"  
            method="POST"
            class="row justify-content-center mt-5">
                <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Titular de la Sección
                    </label>
                        <input id="review" type="text"  name="review" class="form-control" value="{{ old('review', $aboutme->review) }}">
                        @error('review')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Descripción Personal
                    </label>
                        <input id="personaldescription" type="text"  name="personaldescription" class="form-control" value="{{ old('personaldescription', $aboutme->personaldescription) }}">
                        @error('personaldescription')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Encabezado
                    </label>
                        <input id="do" type="text"  name="do" class="form-control" value="{{ old('do', $aboutme->do) }}">
                        @error('do')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col col-12 col-lg-6 col-md-6 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Descarga
                    </label>
                        <input id="download_algo" type="text"  name="download_algo" class="form-control" value="{{ old('download_algo', $aboutme->download_algo) }}">
                        @error('download_algo')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col col-12 col-lg-6 col-md-6 text-center mt-5">
                    <input type="file" name="archivosubido">
                    </div>
                    @foreach ($user->aboutme as $aboutme)
                    <div class="row border m-3 p-2">
                    <div class="col col-12 col-lg-6 col-md-6 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Servicio
                        </label>
                            <input id="service" type="text"  name="service" class="form-control" value="{{ old('service', $aboutme->service) }}">
                            @error('service')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>        
                <div class="col col-12 col-lg-6 col-md-6 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Descripción del Servicio
                    </label>
                        <input id="servicedescription" type="text"  name="servicedescription" class="form-control" value="{{ old('servicedescription', $aboutme->servicedescription) }}">
                        @error('servicedescription')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                </div>
                    @endforeach
                    <div class="col col-12">
                    <div class="text-center mt-2 m-auto" style="width:18rem;">
                @if ($user->image_aboutme)    
                <img class="card-img-top mb-1" src="{{ $aboutme->gett_image }}" alt="Sobre Mi">
                @else
                <img class="card-img-top mb-1" src="{{asset('assets/images/ab-img.png')}}" alt="Image">
                @endif   
                    <input  class="mt-3 col col-7" type="file" name="filee">
                    @error('filee')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="alert alert-primary mt-3 fw-bold" role="alert">
                        <ul>
                         <li>Formato Permitido: "JPG"</li>
                         <li>Tamaño Recomendado: "min:600x600(px)"</li>   
                        </ul>
                    </div>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="col col-12 mt-5">
                    <button class="btn-warning btn btn-lg mt-3 mb-5" type="submit" class="site-btn mt-3">Guardar Cambios</button>
                    </div>
            </form>       
        </div>
    </div>
 