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
                'field' => 'description',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'unit_title_1',
                'title' => 'Unit Title 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'unit_1',
                'title' => 'Unit 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'unit_title_2',
                'title' => 'Unit Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'unit_2',
                'title' => 'Unit 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'unit_title_3',
                'title' => 'Unit Title 3'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'unit_3',
                'title' => 'Unit 3'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'unit_title_4',
                'title' => 'Unit Title 4'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'unit_4',
                'title' => 'Unit 4'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'left_content_1',
                'title' => 'Left Content 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'left_content_2',
                'title' => 'Left Content 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'left_content_3',
                'title' => 'Left Content 3'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'left_content_4',
                'title' => 'Left Content 4'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'left_image',
                'title' => 'Left Image'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'left_content_5',
                'title' => 'Left Content 5'
            ])

            @row([
                'type' => 'editor',
                'field' => 'left_editor',
                'title' => 'Left Description'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'right_content_1',
                'title' => 'Right Content 1'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'right_image',
                'title' => 'Right Image'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'right_content_2',
                'title' => 'Right Content 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'right_content_3',
                'title' => 'Right Content 3'
            ])

            @row([
                'type' => 'editor',
                'field' => 'right_editor',
                'title' => 'Right Content'
            ])

        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection