@extends('layout.guest')

    @section('main')
    <div class="container  w-50 mt-2">
      @if(session('success'))
              <div class="alert alert-success" role="alert">
                <h4 class="text-center">{{ session('success') }}</h4>
              </div>
     @endif
    <div class="row bg-dark">
        <h4 class="text-light text-center p-2">ToDo List Show</h4>
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col" class="ml-5">Action</th>

            </tr>
          </thead>
          <tbody>
            @forelse ($profiles as $profile)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $profile->name }}</td>
              <td >
                <a href="{{ url('/edit') }}/{{ $profile->id }}" class="btn btn-light">Edit</a>
                <a href="{{ url('/destroy') }}/{{ $profile->id }}" class="btn btn-light ">Delete</a>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="50">
                <p class="bg-light text-danger text-center">no data</p>
              </td>
            </tr>
            @endforelse


          </tbody>
        </table>
    </div>
  </div>

    @endsection
