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
                'title' => 'Banner Title 1',
                'field' => 'banner_title_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Banner Title 2',
                'field' => 'banner_title_2',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'first_title_1',
                'title' => 'First Title 1',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'first_title_2',
                'title' => 'First Title 2',
            ])

            @row([
                'type' => 'editor',
                'field' => 'first_description',
                'title' => 'First description',
            ])
{{-- 
            @row([
                'type' => 'image-upload',
                'field' => 'logo_image_left',
                'title' => 'Left Image',
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'logo_image_right',
                'title' => 'Right Image',
            ]) --}}

            {{-- @row([
                'type' => 'textinput',
                'title' => 'Left Image Sentence',
                'field' => 'left_image_sentence',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Right Image Sentence',
                'field' => 'right_image_sentence',
            ]) --}}

            @row([
                'type' => 'editor',
                'field' => 'second_description',
                'title' => 'Second Description',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'third_title_1',
                'title' => 'Third Title 1',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'third_title_2',
                'title' => 'Third Title 2',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'icon_description_1',
                'title' => 'Icon Description 1',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'icon_description_2',
                'title' => 'Icon Description 2',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'icon_description_3',
                'title' => 'Icon Description 3',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'icon_description_4',
                'title' => 'Icon Description 4',
            ])
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection