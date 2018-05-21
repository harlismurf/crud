@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create</div>

                <div class="card-body">
                    <form action="{{ url('users/') }}{{ isset($user) ? '/' . $user->id: '' }}" method="POST">
                        {{ csrf_field() }}
                        @if (isset($user))
                            {{ method_field('PUT') }}
                        @endif
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Nama" class="form-control" value="{{ isset($user) ? $user->name: '' }}">
                            <input type="email" name="email" placeholder="Email" class="form-control" value="{{ isset($user) ? $user->email: '' }}">
                            <button type="submit" class="btn btn-sm btn-success"> Simpan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
