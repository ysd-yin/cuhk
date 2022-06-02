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
                'title' => 'Banner Image'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_1',
                'title' => 'Title 1'
            ])  

            @row([
                'type' => 'textinput',
                'field' => 'title_2',
                'title' => 'Title 2'
            ])  

            @row([
                'type' => 'editor',
                'field' => 'first_description',
                'title' => 'First Description'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_1',
                'title' => 'Image Title 1'
            ])  

            @row([
                'type' => 'textinput',
                'field' => 'image_2',
                'title' => 'Image Title 2'
            ])  

            @row([
                'type' => 'textinput',
                'field' => 'image_3',
                'title' => 'Image Title 3'
            ])  

            @row([
                'type' => 'image-upload',
                'field' => 'left_image',
                'title' => 'Left Image'
            ])

            @row([
                'type' => 'editor',
                'field' => 'url_title_1',
                'title' => ' Left URL Title'
            ])  

            @row([
                'type' => 'textinput',
                'field' => 'url_1',
                'title' => ' Left URL'
            ])  

            @row([
                'type' => 'image-upload',
                'field' => 'right_image',
                'title' => 'Right Image'
            ])

            @row([
                'type' => 'editor',
                'field' => 'url_title_2',
                'title' => ' Right URL Title'
            ])  

            @row([
                'type' => 'textinput',
                'field' => 'url_2',
                'title' => ' Right URL'
            ])  
             
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection