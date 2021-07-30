@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    @foreach($post as $p)
                            <a href="/post/{{$p->id}}"><img src="{{ asset('storage').'/'.$p->image }}" style="width:1000px;height:500px;"></a>                                        
                            <hr>
                            <h3>{{$p->title}}</h3>
                            <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
