@extends('layouts.app')

@section('content')

@if (Session::has('success'))
	<h3>{{ Session::get('success') }}</h3>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Database Editor</div>

                <div class="card-body">
                    <table class="table table-hover table-bordered">
                    	<thead>
                    		<tr>
                    			<th width=5>NO</th>
                    			<th>Nama</th>
                    			<th>Email</th>
                    			<th>
									<a href="{{ url('users/create') }}" class="btn btn-sm btn-info">Tambah</a>
                    			</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($data as $key => $value)
                    		<tr>
                    			<td> {{$key++}} </td>
                    			<td> {{$value->name}} </td>
                    			<td> {{$value->email}} </td>
                    			<td> 
									<a href="{{ url('users/'. $value->id .'/edit') }}" class="btn btn-sm btn-info">Edit</a>
									<form action="{{ url('users/'. $value->id) }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button type="submit" class="btn btn-sm btn-danger"> Hapus </button>
									</form>
                    			</td>
                    		</tr>
                    		@endforeach
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
