@extends('layouts.app') 
@section('content')





<div class="card">
    <div class="card-header">

        <img src="{{ $conversations->user->avatar }}" alt="" width="70px" height="70px">
        <span> <h4> {{ $conversations->user->name }} </h4> <br> paskelbta {{ $conversations->created_at }} ({{ $conversations->created_at->diffForHumans() }})
         <br> Vartotojo karmos taškai:({{ $conversations->user->karma }})
        </span>

    </div>

    <div class="card-body">

        <h4 class="text-center">
            {{ $conversations->title }}
        </h4>
        <p class="text-center">
            {{ $conversations->content }}
        </p>
    </div>
</div>

<br><br><br>
<b>ATSAKYMAI Į ŠĮ KLAUSIMĄ:</b> 
@foreach($conversations->answers as $answer)
<div class="card">

    <div class="card-header">
        <img src="{{ $answer->user->avatar }}" alt="" width="70px" height="70px">
        <span>{{ $answer->user->name }} <br> {{ $conversations->created_at }} ({{ $conversations->created_at->diffForHumans() }})
        ({{ $answer->user->karma }})
        </span>
    </div>

    <div class="card-body">
        <p class="text-center">
            {{ $answer->content }}
        </p>
        <div class="card-footer">
            @if($answer->gained_a_like())
           <a href="{{ route('answunlike', ['id' => $answer->id ]) }}" class="btn btn-danger text-lg-left font-weight-bold">nuimti like <br> <span class="badge"><img src="{{ asset('storage/like.png') }}" alt="" width="35px" height="35px">{{ $answer->likes->count()}}</span></a>
            @else
            <a href="{{ route('answlike', ['id' => $answer->id ]) }}" class="btn btn-success text-lg-left font-weight-bold">duoti laik <br><span class="badge"> <img src="{{ asset('storage/like.png') }}" alt="" width="35px" height="35px">{{ $answer->likes->count()}}</span></a>
            @endif

        </div>
    </div>

</div>


@endforeach



<div class="card">

    <div class="card-body">
        <form action="{{ route('convanswer', ['id' => $conversations->id]) }}" method="post">
            @csrf
            <div class="form-control">
               <label for="answer">atsakyti</label>
                <textarea name="answer" id="answer" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-control">
<button class="btn float-right">atsakyti</button>
            </div>
        </form>
    </div>
</div>





@endsection
