@extends('layouts.app')
@section('content')


                <div class="card-header text-center">klausimo forma</div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <form action="{{ route('convstore') }}" method="post" enctype="multipart/form-data">
                   @csrf
                   
                     <div class="form-control">
                    <label for="Title">Temos pavadinimas*:</label>     
                     <input type="text" name="title" class="form-control">
                        </div>
                         
                   <div class="form-control">
                      <label for="channel">pasirinkite jus dominančią programavimo sritį/kalbą:</label>
                      
                       <select name="channel_id" id="channel_id" class="form-control">
                           @foreach ($channels as $channel)
                           <option value="{{ $channel->id }} ">{{ $channel->title }}</option>
                           
                           @endforeach
                       </select>
                   </div>
                   <div class="form-control">
                       <label for="content">kuo plačiau apibūdinkite savo problemą*:</label>
                       <textarea name="content" id="content" cols="10" rows="5" class="form-control"></textarea>
                   </div>
                     <div class="form-control">
                       <label for="attachments">prisekite failus <small> (nebūtina)</small> :</label><br>
          <input type="file" name="attachments[]" id="file" multiple>
                       </div>
                   <div class="form-control">
                       <button class="btn btn-class" type="submit">pateikti klausimą</button> <br><br>
                       * - (žvaigždute pažymėti laukai privalomi užpildyti)
                       </div>
                   </form>
                </div>

@endsection