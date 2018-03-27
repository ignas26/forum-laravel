@extends('layouts.app')
@section('content')

             <div class="card">
                <div class="card-header">sukurkite naują kanalą</div>

                <div class="card-body">
                    <form action="{{ route('channels.store')  }}" method="post">
                              @csrf
                        <div class="form-control">
                            <input type="text" name="channel" class="form-control">
                        </div>
                           <div class="form-control">
                            <div class="text-center">
                            <button class="btn btn-success" type="submit">išsaugoti</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection