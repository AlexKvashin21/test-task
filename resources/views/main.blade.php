@extends('layouts.app')

@section('content')
    <leads-table :pages_counter="{{json_encode($pagesCounter, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK)}}"
                 :links="{{json_encode($links, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK)}}"></leads-table>
    </leads-table>
@endsection
