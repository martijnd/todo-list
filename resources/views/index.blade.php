@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                        </tr>
                        @foreach($user->todos as $todo)
                            <tr>
                               <td>{{ $todo->title }}</td>
                               <td>{{ $todo->is_done ? 'Done' : 'Not done' }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
