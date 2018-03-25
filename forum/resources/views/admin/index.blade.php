@extends('layouts.app')
@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Kanalų valdymo pultas</div>

                <div class="panel-body">
                    <table class="table table-hover">
                      <thead>
                          <th>Pranešimas</th>
                          <th>Redaguoti</th>
                          <th>Pašalinti</th>
                      </thead>
                      
                      <tbody>
                       @foreach($channels as $channel)   
                          <tr>
                              <td> {{ $channel->title }}</td>
                              <td>  <a href="{{ route('channels.edit', ['channel' => $channel->id]) }}">
                              <img src="{{ asset('storage/edit.png') }}" alt=""></a> 
                              </td>     
                              <td>  
                              <form action="{{ route('channels.destroy', ['channel' => $channel->id]) }}" method="post">
                                   @csrf
                                    <input type="hidden" name="_method" value="delete">
                              <button type="submit">
                              <img src="{{ asset('storage/delete.png') }}" alt="">
                              </button>
                              </form>
                              </td>
                          </tr>
                          
                          @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
@endsection