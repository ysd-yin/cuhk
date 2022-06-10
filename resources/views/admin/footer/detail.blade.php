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
                'type' => 'textinput',
                'field' => 'protals',
                'title' => 'Portals Title'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_1',
                'title' => 'Portals Title 1'
            ])
             
             @row([
                'type' => 'textinput',
                'field' => 'url_1',
                'title' => 'Portals URL 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_2',
                'title' => 'Portals Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'url_2',
                'title' => 'Portals URL 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_3',
                'title' => 'Portals Title 3'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'url_3',
                'title' => 'Portals Title 3'
            ])

            @row([
                'type' => 'editor',
                'field' => 'privacy',
                'title' => 'Privacy Content'
            ])

            @row([
                'type' => 'editor',
                'field' => 'disclaimer',
                'title' => 'Disclaimer Content'
            ])

        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection