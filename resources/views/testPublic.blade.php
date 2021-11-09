@extends('layoutPublic')

@section('content')
    <!--Name of test-->
    <h2 class="my-5 text-primary text-center">{{ $test->name }}</h2>

    <form action="/submit_answer" method="post">
        @csrf
            <input type="hidden" name="test_id" value="{{ $test->id }}">
        <!-- User name and email inputs -->
        <div class="container justify-content-center mb-4">
            <div class="form-control bg-info">
                <div class="p-3 my-5 text-light">
                    <div class='form-inline row'>
                        <div class='form-group col-sm-6'>
                            <label for="name" autofocus><strong>Name:</strong></label>
                            <input class="form-control mb-3" type="text" id="name" name="name" placeholder="Name"
                                   autofocus required>
                        </div>
                        <div class='form-group col-sm-6'>
                            <label for="email"><strong>Email:</strong></label>
                            <input class="form-control" type="email" id="email" name="email"
                                   placeholder="your@address.here" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Form section-->
        <div class="container">
            <div class="form-control">

                @foreach($test->questions as $question)
                    <label for="q{{ $question->id }}">{{ $question->question }}</label>
                    <input type="hidden" value="{{ $question->id }}" name="answers[{{ $loop->index }}][question_id]">
                    <textarea rows="3" type="text" class="form-control mb-2"
                              id="q{{ $question->id }}"
                              maxlength="2000"
                              name="answers[{{ $loop->index }}][answer]"
                              required
                    ></textarea>
                @endforeach
                <button type="submit" class="btn btn-primary btn-lg mt-2" value="input">Submit</button>
            </div>
        </div>

    </form>
@endsection
