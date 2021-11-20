@extends('layout')

@section('content')
    <!-- Page heading -->
    <h2 class="text-center my-5 text-primary">Add Question</h2>

    <!-- Test name heading -->
    <h2 class="text-center m-5 text-primary">*{{ $test->name }}*</h2>

    <!-- Input and button to add new question -->
    <div class="container mb-5" style="max-width: 700px;">
        <form method="post" action="/questions">
            @csrf
            <input type="hidden" name="test_id" value="{{ $test->id }}">
            <input class="form-control mb-2" name="question"
                   placeholder="Input new question">
            <button type="submit" class="btn btn-primary btn-sm mb-5" value="add-question">
                Add Question
            </button>
        </form>


        <!-- Table for number "question inputs" and edit delete buttons-->

        <div class=" m-md-auto">
            @if($test->questions->count())
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="col-md-1 align-middle text-center">#</th>
                        <th class="col-md-6">Question:</th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test->questions as $question)
                        <tr>
                            <th class="align-middle text-center">{{ $loop->iteration }}</th>
                            <form method="post" action="/questions/{{ $question->id }}">
                                @csrf
                                @method('PUT')
                                <td class="text-center">
                                    <input class="form-control col-sm-12" placeholder="Question content"
                                           name="question"
                                           value="{{ $question->question }}"
                                    >
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm px-3" role="button">
                                        Edit
                                    </button>
                                </td>
                            </form>
                            <td class="text-center">
                                <form method="post" action="/questions/{{ $question->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" role="button">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
