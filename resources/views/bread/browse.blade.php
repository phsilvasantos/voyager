@extends('voyager::app')

@section('content')
<bread-browse
    :bread="{{ json_encode($bread) }}"
    :accessors="{{ json_encode($bread->getComputedProperties()) }}"
    :layout="{{ json_encode($layout) }}"
    :actions="{{ json_encode($actions) }}"
    :translatable="{{ json_encode($bread->getTranslatableFields()) }}"
    data-url="{{ route('voyager.'.$bread->slug.'.index') }}"
></bread-browse>
@endsection
