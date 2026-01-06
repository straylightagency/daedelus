<?php

use Daedelus\Fields\Location;

name( 'Privacy Policy' )
    ->withPost()
    ->withFields( function ( Location $location ) {
        $location->styleWithoutBox()->hideAll( 'the_content', 'permalink' );
    } );
?>

@extends('layout')

@section('content')
    <h1>Privacy Policy</h1>
@endsection