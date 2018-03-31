@extends('layouts.app') 
@section('content')

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</div>

        
<!-- <img src="{{ asset('storage/avatar.jpg') }}" alt="" width="250px" height="250px">-->

@foreach($conversations as $conversation)


<div class="card">
    <div class="card-header">

        <img src="{{ $conversation->user->avatar }}" alt="" width="70px" height="70px">
        <span>{{ $conversation->user->name }} <br> {{ $conversation->created_at }} ({{ $conversation->created_at->diffForHumans() }}) </span>
        <a href={{ route('view', ['id' => $conversation->id]) }} class="btn btn-secondary float-right">View</a>
    </div>

    <div class="card-body">

        <h4 class="text-center">
           <b> {{ $conversation->title }} </b>
        </h4>
        <p class="text-center">
            {{ str_limit($conversation->content, 41) }}
        </p>
    </div>

    <div class="card-footer">

        <p>
            {{ $conversation->answers->count() }} Answer(s)
        </p>
    </div>

</div><br><br> @endforeach
<div class="text-center">
    {{ $conversations->links() }}
</div>

@endsection