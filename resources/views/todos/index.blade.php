@extends('app')
@section('content')
    <div class="container w-25 border p-4 mt-5">
        <form action="">
            <form>
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo de la tarea</label>
                    <input type="email" class="form-control" id="title" >
                </div>
                <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
            </form>
        </form>
    </div>
@endsection
