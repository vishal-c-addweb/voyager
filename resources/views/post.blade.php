@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Single Post') }}</div>

                <div class="card-body">
                            <a href="/post/{{$post->id}}"><img src="{{ asset('storage').'/'.$post->image }}" style="width:1000px;height:500px;"></a>                                        
                            <hr>
                            <h3>{{$post->title}}</h3>
                            <p>{{strip_tags($post->body)}}</p>
                            <small>{{$post->meta_description}}</small>
                            <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
