@extends('layout')

@section('content')
    <!-- Heading -->
    <h2 class="text-primary text-center mt-5">Create a test</h2>


    <!-- div to maintain table and iput widths -->
    <div class="container w-75" style="max-width: 870px; min-width: 320px;">

        <!--Input and button to create a test-->
        <form class="my-5" method="post" action="/app_tests">
            @csrf
            <input type="text" name="name" class="form-control mb-2" placeholder="Test name">
            <button type="submit" class="btn btn-primary btn-sm" value="input">Create</button>
        </form>

        <!-- Table for inputs and buttons -->
        @if($tests->count())
            <table class="table table-striped table-bordered table-hover mb-5">
                <thead>
                <tr>
                    <th class="col-sm-1 align-middle text-center">#</th>
                    <th class="col-sm-10">Test link</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tests as $test)
                    <tr>
                        <th class="align-middle text-center">{{ $loop->iteration }}</th>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/app_tests/{{ $test->id }}">{{ $test->name }}</a>
                            <a class="btn btn-info btn-sm"
                               href="{{ route('publicTest', ['test' => $test->id]) }}"
                               target="_blank"
                            >
                                Public link
                            </a>
                        </td>
                        <td>
                            <form method="post" action="/app_tests/{{ $test->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" role="button">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
