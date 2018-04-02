@extends('layouts.app') 
@section('content')

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</div>

@foreach($conversations as $conversation)


<div class="card">
    <div class="card-header bg-dark text-white">
        <span> <h4> {{ $conversation->user->name }} </h4> <br> paskelbta {{ $conversation->created_at }} ({{ $conversation->created_at->diffForHumans() }}) 
        <br> Vartotojo karmos taškai:({{ $conversation->user->karma }})
        </span>
        <a href={{ route('view', ['id' => $conversation->id]) }} class="btn btn-info float-right">Žiūrėti</a>
    </div>

    <div class="card-body">

        <h4 class="text-center">
           <b> {{ $conversation->title }} </b>
        </h4>
        <p class="text-center">
            {{ str_limit($conversation->content, 50) }}
        </p>
    </div>

    <div class="card-footer bg-dark text-white">
<div class="card-body">
       @forelse($conversation->attachments as $attachment)
        <p><a href="{{ route('download_file', ['nr' => $attachment->id]) }}" >{{ $attachment->original_name }}</a> </p>
    @empty
      <p>Prisegtų failų nerasta</p>
@endforelse
</div>
       
        <span>
            <span class="badge badge-info badge-pill left"> {{ $conversation->answers->count() }} </span> Answer(s)
        </span>
<button class="btn btn-secondary float-right disabled">KANALAS: {{ $conversation->channel->title }}</button>

    </div>

</div><br><br> @endforeach
<div class="text-center">
    {{ $conversations->links() }}
</div>

@endsection
