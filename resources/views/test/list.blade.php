@extends('layouts.master')

@section('header')
<h2><div class="quote">{{ Inspiring::quote() }}</div></h2>
@stop

@section('content')
    <div class="page-header">
        <h1>Info</h1>
    </div>
    @if(isset($lists))
        <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th># Day</th>
                <th># Count</th>
                <th># Used</th>
              </tr>
            </thead>
            <tbody>
        @foreach($lists as $data)
            <tr>
                <td>{{ $data->day }}</td>
                <td>{{ $data->count }}</td>
                <td>{{ $data->used }}</td>
            </tr>
        @endforeach
            </tbody>
          </table>
            {{ $render }}
        </div>
    @endif
@stop
