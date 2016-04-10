@extends('layouts.master')

@section('title', 'Detalhes do Voluntário')

@section('container')

<h2>Detalhes do Voluntário</h2>

<p><b>Nome:</b> {{$volunteer->name}}</p>
<p><b>Telefone:</b> {{$volunteer->phone}}</p>
<p><b>Email:</b> {{$volunteer->email}}</p>

<a href="{{ route('volunteer.index') }}">Voltar para a Lista</a>

@endsection