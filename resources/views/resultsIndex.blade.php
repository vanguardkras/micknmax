@extends('layout')

@section('content')
    <!-- Heading -->
    <h2 class="p-5 text-center text-primary">Results</h2>

    <!-- Table of users and the tests they've taken -->
    <div class="container mb-5">
        <div class="col-md-9 m-md-auto">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="col-3 col-md-3">Name</th>
                    <th class="col-3 col-md-3">Email</th>
                    <th class="col-3 col-md-3">Test</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="text-center align-middle">{{ $user->name }}</td>
                        <td class="text-center align-middle">{{ $user->email }}</td>
                        <td>
                            <table class="w-100">
                                @foreach($user->tests as $test)
                                    <tr>
                                        <td class="text-center align-middle col-3">{{ $test->name }}</td>
                                        <td class="text-center align-middle col-4">
                                            <a class="btn btn-primary btn-sm"
                                                    href="/results/{{ $test->id }}/{{ $user->id }}">
                                                See results
                                            </a>
                                        </td>
                                        <td class="text-center align-middle col-5">
                                            {{ $test->pivot->created_at->toDateTimeString() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
