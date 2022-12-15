@extends('layout.guest')
@section('main')
    <div class="container w-50 border mt-5 bg bg-dark rounded">
        <h3 class="text-center text-white mt-2 ">ToDo Project</h3>




        <div class="row border m-5 p-2 rounded">
            <form action="{{ url('/insert') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="text-light">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelpId"
                        placeholder="">
                    @error('name')
                        <p class="text-danger bg bg-light mt-1 rounded">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary mt-2" id="add">Add</button>
                </div>
            </form>
        </div>
        <a href="{{ url('/index') }}" class="btn btn-dark border-bottom-0 rounded-top border-light w-50">All Data</a>

    </div>
@endsection

@section('script')
@if (session('success'))
<script>
    Swal.fire({
        position: 'top',
        icon: 'success',
        title: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 3500
    })
</script>
@endif
@endsection
