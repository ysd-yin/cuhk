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
                'type' => 'textarea',
                'field' => 'bottom_description',
                'title' => 'Bottom Description'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_1',
                'title' => 'Ball 1 Image (70 width X 70 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'ball_1_text',
                'title' => 'Ball 1 Text'
            ])
             
            @row([
                'type' => 'image-upload',
                'field' => 'ball_2',
                'title' => 'Ball 2 Image (70 width X 70 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'ball_2_text',
                'title' => 'Ball 2 Text'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_3',
                'title' => 'Ball 3 Image (70 width X 70 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'ball_3_text',
                'title' => 'Ball 3 Text'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_4',
                'title' => 'Ball 4 Image (70 width X 70 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'ball_4_text',
                'title' => 'Ball 4 Text'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_5',
                'title' => 'Ball 5 Image (70 width X 70 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'ball_5_text',
                'title' => 'Ball 5 Text'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_6',
                'title' => 'Ball 6 Image (70 width X 70 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'ball_6_text',
                'title' => 'Ball 6 Text'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_7',
                'title' => 'Ball 7 Image (70 width X 70 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'ball_7_text',
                'title' => 'Ball 7 Text'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'ball_8',
                'title' => 'Ball 8 Image (70 width X 70 height px)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'ball_8_text',
                'title' => 'Ball 8 Text'
            ])
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection