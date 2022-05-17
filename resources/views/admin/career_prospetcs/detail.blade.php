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
                'field' => 'title',
            ])

            @row([
                'type' => 'editor',
                'field' => 'description',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'bottom_title',
                'title' => 'Bottom Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_1',
                'title' => 'Ball 1'
            ])
             
            @row([
                'type' => 'image-upload',
                'field' => 'ball_2',
                'title' => 'Ball 2'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_3',
                'title' => 'Ball 3'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_4',
                'title' => 'Ball 4'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_5',
                'title' => 'Ball 5'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_6',
                'title' => 'Ball 6'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_7',
                'title' => 'Ball 7'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_8',
                'title' => 'Ball 8'
            ])
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection