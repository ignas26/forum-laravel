@extends('layouts.app')
@section('content')
                 @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
               <div class="panel panel-default">
                <div class="panel-heading">redaguoti kanalą: {{ $channel->title }}</div>

                <div class="panel-body">
                    <form action="{{ route('channels.update', ['channel' => $channel->id])  }}" method="post">
                              @csrf
                              <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <input type="text" name="channel" value="{{ $channel->title }}" class="form-control">
                        </div>
                        
                           <div class="form-group">
                            <div class="text-center">
                            <button class="btn btn-success" type="submit">išsaugoti</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection