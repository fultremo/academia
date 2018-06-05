@extends('layouts.layout')

@section('content')
    <h1>Contactos</h1>
    @if (count($contacts) > 0)
        @foreach ($contacts as $contact)
            <div class="well">
                <h3><a href="contact/{{ $contact->id }}">{{ $contact->email }}
                    </a> <span class="label label-danger">{{ $contact->subject }}</span></h3>
            </div>
        @endforeach
    @endif
@endsection
