<?php

use Daedelus\Fields\Location;

name( 'Template Default' )
    ->withFields( function ( Location $location ) {
        return [
        ];
    } );
?>

@extends('layout')

@section('content')
    <h1>Default</h1>
@endsection