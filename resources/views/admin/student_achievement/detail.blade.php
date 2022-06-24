@extends('layouts.admin')
@section('buttons')

    @if($id && $url = $record->getDetailUrl(['preview' => true]))
    <a class="btn btn-primary" href="{{ $url }}" target="_blank">Preview</a>
    @endif

    @can('update', $record)
    <button class="btn btn-success btn-save-main-form" type="button">Save</button>
    @endcan

    @can('delete', $record)
    <button class="btn btn-danger btn-save-delete-form" type="button">Delete</button>
    @endcan

    @can('back', $record)
    <a class="btn btn-secondary" href="{{ $config['links']['detail']['back'] }}">Back</a>
    @endcan  
@endsection
@section('content')
<form id="deleteForm" action="{{ route('admin.' . $config['section'] . '.delete') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">
</form>

<form id="mainForm" action="{{ route('admin.' . $config['section'] . '.save') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">
    <div class="card">
        <div class="card-header">{{ $config['page_name'] }}</div>
        <div class="card-body" id="app-main">
            @row([
                'type' => 'image-upload',
                'field' => 'top_banner',
                'title' => 'Banner Image (2000 width X 667 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_1',
                'title' => 'Title 1',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_2',
                'title' => 'Title 2',
            ])

            @row([
                'type' => 'editor',
                'field' => 'description',
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'bottom_banner_1',
                'title' => 'Bottom Banner Image 1 (478 width X 418 height px)'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'bottom_banner_2',
                'title' => 'Bottom Banner Image 2 (717 width X 418 height px)'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'bottom_banner_3',
                'title' => 'Bottom Banner Image 3 (478 width X 418 height px)'
            ])
    
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection