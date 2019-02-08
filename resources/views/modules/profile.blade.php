@extends('layouts.app')

@section('content')             
<div class="main app form" id="main" style="background:url({{ asset('images/header-bg.jpeg') }}) !important; background-size: cover !important;"><!-- Main Section-->
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card profile-card top-profile-card" style="border">
                    <div class="card-body">
                        <div class="profile-card-body" style="background-image:url(../images/user-cover.jpg) !important;">
                            <h1 class="username font-weight-bold font-italic">{{ $user->name }}</h1>
                            <img class="rounded-circle user-avatar" src="{{ $user->imgurl }}" alt="User Avatar">
                        </div>
                    </div>
                </div>
            </div>

            <!-- tab -->
            <div class="col-md-8">
                <div class="card profile-card bottom-profile-card">
                    <nav>
                        <div class="nav nav-tabs profile-nav" id="nav-tab" role="tablist">
                            <a 
                            class="nav-item nav-link active"
                            id="historial-tab"
                            data-toggle="tab"
                            href="#historial" 
                            role="tab" 
                            aria-controls="historial" 
                            aria-selected="true"
                            >
                                Historial
                            </a>
                            <a 
                            class="nav-item nav-link"
                            id="configuraciones-tab" 
                            data-toggle="tab" 
                            href="#configuraciones" 
                            role="tab" 
                            aria-controls="configuraciones" 
                            aria-selected="false"
                            >
                                Configuraciones
                            </a>
                        </div>
                    </nav>

                    <div class="card-body" style="color: white;">
                        <div class="tab-content" id="nav-tabContent">
                    
                        <div 
                        class="tab-pane fade show active"
                        id="historial"
                        role="tabpanel" 
                        aria-labelledby="historial-tab"
                        >
                            <h3>
                                Aquí irá el historial
                            </h3>
                        </div>

                        <div 
                        class="tab-pane fade"
                        id="configuraciones" 
                        role="tabpanel" 
                        aria-labelledby="configuraciones-tab"
                        >
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-4 col-form-label control-label">Nombre</label>

                                    <div class="col-md-6">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="inputName" 
                                            value="{{ $user->name }}" 
                                            autofocus
                                            >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-4 col-form-label control-label">Correo Electrónico</label>

                                    <div class="col-md-6">
                                        <input 
                                            type="email" 
                                            class="form-control" 
                                            id="inputEmail" 
                                            value="{{ $user->email }}" 
                                            >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="imgurl" class="col-sm-4 col-form-label control-label">Foto de Perfil</label>
                                    <div class="col-md-6">
                                        <input 
                                            type="file"
                                            name="imgurl" 
                                            class="form-input"
                                            >
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-12">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                    </div>
                      
                </div>
            </div>
            <!-- end tabs -->

        </div>
    </div>    
</div>
@endsection
