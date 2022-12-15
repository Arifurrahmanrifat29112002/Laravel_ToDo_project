@extends('layout.guest')
@section('main')
    <div class="container w-50 border mt-5 bg bg-dark rounded">
        <h3 class="text-center text-white mt-2 ">Edit ToDo List</h3>
       @if(session('success'))
            <h6 class="text-center text-light  ">{{ session('success') }}</h6>
       @endif
        <div class="row border m-5 p-2 rounded">
            <form action="{{ url('/edit') }}/{{ $list_data_edit->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="text-light">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelpId" placeholder="" value="{{ $list_data_edit->name }}">
                   @error('name')
                    <p class="text-danger bg bg-light mt-1 rounded">{{ $message }}</p>
                   @enderror
                    <button type="submit" class="btn btn-primary mt-2">Add</button>
                  </div>
            </form>
        </div>
    </div>

    @endsection
