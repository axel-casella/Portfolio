@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row justify-content-center">
    @if (session('status'))
    <div class="alert alert-success fw-bold text-center col-md-6 m-auto mt-3 mb-3" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="container">
        <div class="row justify-content-center text-center">
            <h2 class="col col-12 text-center m-auto mt-5">Datos Personales</h2>
            <h6 class="col col-12 text-center m-auto mt-1">"HOME"</h6>
            <form action="{{ route('user.update', $user) }}"
            enctype="multipart/form-data"  
            method="POST"
            class="row justify-content-center mt-5">
                <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Mensaje de Bienvenida
                    </label>
                        <input id="message" type="text"  name="message" class="form-control" value="{{ old('message', $user->message) }}">
                        @error('message')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Nombre y Apellido
                    </label>
                        <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $user->name) }}">
                        @error('name')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Título Profesional
                        </label>
                            <input id="title_job" type="text"  name="title_job" class="form-control" value="{{ old('title_job', $user->title_job) }}">
                            @error('title_job')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>        
                <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Correo Electrónico
                    </label>
                        <input id="email" type="text"  name="email" class="form-control" value="{{ old('email', $user->email) }}">
                        @error('email')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Teléfono
                    </label>
                        <input id="tel" type="text"  name="tel" class="form-control" value="{{ old('tel', $user->tel) }}">
                        @error('tel')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="col col-12 col-lg-4 col-md-4 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Dirección
                    </label>
                        <input id="address" type="text"  name="address" class="form-control" value="{{ old('address', $user->address) }}">
                        @error('address')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="col col-12 text-center mt-5" style="width:18rem;">
                @if ($user->image)    
                <img class="card-img-top mb-1" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                @else
                <img class="card-img-top mb-1" src="{{asset('assets/images/hero.png')}}" alt="Image">
                @endif   
                    <input  class="mt-3 col col-7" type="file" name="file">
                    @error('file')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="alert alert-primary mt-3 fw-bold" role="alert">
                        <ul>
                         <li>Formato Permitido: "JPG"</li>
                         <li>Tamaño Recomendado: "264x264(px)"</li>   
                        </ul>
                    </div>
                    <div class="row">
                    <h3 class="col col-12 m-auto mt-4">Redes Sociales</h3>
                    <div class="col col-12 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Github
                    </label>
                        <input id="github" type="text"  name="github" class="form-control" value="{{ old('github', $user->github) }}">
                        @error('github')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col col-12 text-center mt-2">
                        <label class="text-gray-700 text-sm fw-bold mb-2" >
                            Facebook
                        </label>
                            <input id="facebook" type="text"  name="facebook" class="form-control" value="{{ old('facebook', $user->facebook) }}">
                            @error('facebook')
                            <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                            </div>
                            @enderror
                    </div>        
                <div class="col col-12 text-center mt-2">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Twitter
                    </label>
                        <input id="twitter" type="text"  name="twitter" class="form-control" value="{{ old('twitter', $user->twitter) }}">
                        @error('twitter')
                        <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                </div>

                    @csrf
                    @method('PUT')
            <button class="btn-warning btn btn-lg mt-3" type="submit" class="site-btn mt-3">Guardar Cambios</button>
            </form>       
        </div>
    </div>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="home" aria-selected="true">Skill</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="sobremi-tab" data-bs-toggle="tab" data-bs-target="#sobremi" type="button" role="tab" aria-controls="profile" aria-selected="false">Sobre Mi</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="educacion-tab" data-bs-toggle="tab" data-bs-target="#educacion" type="button" role="tab" aria-controls="profile" aria-selected="false">Educación</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="workexperience-tab" data-bs-toggle="tab" data-bs-target="#workexperience" type="button" role="tab" aria-controls="contact" aria-selected="false">Experiencia</button>
 </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="skills" role="tabpanel" aria-labelledby="home-tab">
        <div class="d-flex align-items-start mt-5">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar Habilidades</button>
                            <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar Habilidades</button>
                        </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">@include ('admin.includes.skills-create')</div>
                    <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">@include ('admin.includes.skills-edit')</div>
                    <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">@include ('admin.includes.skills-edit')</div>
                    </div>
                    
                </div> 
             </div>
             <div class="tab-pane fade" id="sobremi" role="tabpanel" aria-labelledby="profile-tab">@include ('admin.includes.sobremi')</div>
            </div>
            <div class="tab-pane fade" id="educacion" role="tabpanel" aria-labelledby="contact-tab">@include ('admin.includes.education')</div>
            <div class="tab-pane fade" id="workexperience" role="tabpanel" aria-labelledby="contact-tab">@include ('admin.includes.workexperience')</div>
        </div>
        
    </div>
</section>


@endsection
