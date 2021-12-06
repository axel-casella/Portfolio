@extends('admin.layouts.admin')

@section('main-content')
<div class="col-12">
    <div class="row">
    @if (session('status'))
    <div class="alert alert-success fw-bold text-center col-md-6 m-auto mt-3 mb-3" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('user.update', $user) }}"
          enctype="multipart/form-data"  
          method="POST">
            <div class="row">
            <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Mensaje Bienvenida
                    </label>
                    <input id="message" type="text"  name="message" class="form-control" value="{{ old('message', $user->message) }}">
                    @error('message')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Nombres
                    </label>
                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name', $user->name) }}">
                    @error('name')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Correo
                    </label>
                    <input id="email" type="text"  name="email" class="form-control" value="{{ old('email', $user->email) }}">
                    @error('email')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Título
                    </label>
                    <input id="title_job" type="text"  name="title_job" class="form-control" value="{{ old('title_job', $user->title_job) }}">
                    @error('title_job')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 m-auto mt-3">
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
                <div class="col-md-6 m-auto mt-3">
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
                <div class="col-md-6 m-auto mt-3">
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
                <div class="col-md-6 m-auto mt-3">
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
                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        GitHub
                    </label>
                    <input id="github" type="text"  name="github" class="form-control" value="{{ old('github', $user->github) }}">
                    @error('github')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 m-auto mt-3">
                @if ($user->image)    
                <img class="card-img-top" src="{{ $user->get_image }}" alt="{{ $user->name }}">
                @else
                <img class="card-img-top" src="https://www.fillmurray.com/640/360" alt="Image">
                @endif   
                    <input type="file" name="file">
                    @error('file')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Acerca de Mi "(Título de la sección)"
                    </label>
                    <input id="title_aboutme" type="text"  name="title_aboutme" class="form-control" value="{{ old('title_aboutme', $user->title_aboutme) }}">
                    @error('title_aboutme')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Descripcion Personal
                    </label>
                    <input id="personaldescription" type="text"  name="personaldescription" class="form-control" value="{{ old('personaldescription', $user->personaldescription) }}">
                    @error('personaldescription')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        ¿Qué se hacer? "(Título de la sección)"
                    </label>
                    <input id="title_whatido" type="text"  name="title_whatido" class="form-control" value="{{ old('title_whatido', $user->title_whatido) }}">
                    @error('title_whatido')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Servicios
                    </label>
                    <input id="service" type="text"  name="service" class="form-control" value="{{ old('service', $user->service) }}">
                    @error('service')
                    <div class="bg-danger w-100 p-3 text-white m-2 rounded-3 fw-bold">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 m-auto mt-3">
                    <label class="text-gray-700 text-sm fw-bold mb-2" >
                        Descripción del servicio
                    </label>
                    <input id="servicedescription" type="text"  name="servicedescription" class="form-control" value="{{ old('servicedescription', $user->servicedescription) }}">
                    @error('servicedescription')
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
<section class="container-fluid">
    <div class="row">
        <div class="col-12">
        

    <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="true">Skills</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button" role="tab" aria-controls="edit" aria-selected="false">edit</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="skills" role="tabpanel" aria-labelledby="skills-tab">

  <div class="d-flex align-items-start mt-5">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-new-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="true">Agregar Habilidades</button>
    <button class="nav-link" id="v-pills-edit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit" type="button" role="tab" aria-controls="v-pills-edit" aria-selected="false">Editar Habilidades</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">@include ('admin.includes.skills-create')</div>
    <div class="tab-pane fade" id="v-pills-edit" role="tabpanel" aria-labelledby="v-pills-edit-tab">@include ('admin.includes.skills-edit')</div>
  </div>
</div>  
  </div>
  <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab"></div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

       
    </div>
</div>
</section>

@endsection
