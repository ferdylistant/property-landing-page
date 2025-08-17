@extends('layouts.app')

@php
    $title = $property['title'] . ' - PropertiKu';
    $description = $property['description'];
    $image = $property['image'];
    $type = 'article';
@endphp

@section('content')
    @include('sections.hero')
    <div class="container mx-auto px-6 py-28">
        <x-property-detail :title="$property['title']" :price="$property['price']" :description="$property['description']" :image="$property['image']" :location="$property['location']"
            :type="$property['type']" />
    </div>
@endsection
