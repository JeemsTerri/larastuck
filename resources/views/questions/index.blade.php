@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12">
            <h2>Question List</h2>
        </div>
    </div>
    <div class="row mt-5">
        @foreach($questions as $question)
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="media flex-wrap w-100 align-items-center"> <img
                                src="{{ asset("/avatars") . '/' . $question->author->photo }}"
                                alt="">
                            <div class="media-body ml-3"> <a href="javascript:void(0)"
                                    data-abc="true">{{ $question->author->fullname }}</a>
                                <div class="text-muted small">
                                    {{ $question->since != 0 ? $question->since . Str::plural(' day', $question->since) ." ago": "today" }}
                                </div>
                            </div>
                            <div class="text-muted small ml-3">
                                <div>Member since
                                    <strong>{{ $question->author->created_at->formatLocalized('%d %B %Y') }}</strong>
                                </div>
                                <div><strong>{{ $question->author->post_count }}</strong>
                                    {{ Str::plural('post', $question->author->post_count) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! $question->content !!}
                    </div>
                    <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                        <div class="px-4 pt-3">
                            <a href="javascript:void(0)"
                                class="text-muted d-inline-flex align-items-center align-middle" data-abc="true"> 
                                <i class="fa fa-heart text-danger"></i>&nbsp; 
                                <span class="align-middle">6 Answer</span>
                            </a>
                            <span class="text-muted d-inline-flex align-items-center align-middle ml-4">
                            <i class="fa fa-eye text-muted fsize-3"></i>&nbsp; 
                            <span class="align-middle badge badge-success">Answered</span> </span> 
                        </div>
                        <div class="px-4 pt-3"> 
                            <button type="button" class="btn btn-primary"><i
                                    class="ion ion-md-create"></i>&nbsp; Reply
                            </button> 
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
