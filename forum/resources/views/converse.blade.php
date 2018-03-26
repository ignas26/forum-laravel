@extends('layouts.app')
@section('content')

           <div class="panel panel-default">

                <div class="panel-heading text-center">klausimo forma</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <form action="{{ route('convstore') }}" method="post">
                   @csrf
                   
                     <div class="form-group">
                    <label for="Title">Temos pavadinimas:</label>     
                     <input type="text" name="title" class="form-control">
                        </div>
                         
                   <div class="form-group">
                      <label for="channel">pasirinkite jus dominančią programavimo sritį/kalbą:</label>
                      
                       <select name="channel_id" id="channel_id" class="form-control">
                           @foreach ($channels as $channel)
                           <option value="{{ $channel->id }} ">{{ $channel->title }}</option>
                           
                           @endforeach
                       </select>
                   </div>
                   <div class="form-group">
                       <label for="content">kuo plačiau apibūdinkite savo problemą:</label>
                       <textarea name="content" id="content" cols="10" rows="5" class="form-control"></textarea>
                   </div>
                   <div class="form-group">
                       <button class="btn btn-class" type="submit">pateikti klausimą</button>
                       
                       </div>
                   </form>
                </div>
            </div>
@endsection