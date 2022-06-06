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
                'type' => 'textinput',
                'field' => 'url_title',
                'title' => 'URL Title',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'url',
                'title' => 'URL',
            ])

                        
<b>If the link is a internal page, e.g. about-programme-overview (do not contain "/" at the front) <br>

    If the link is a internal file, e.g. /storage/media/Admissions/brochure.pdf (Please contain "/" at the front)</b><br><br>

            @row([
                'type' => 'textinput',
                'field' => 'video_title',
                'title' => 'Video Title',
            ])

            @repeater([
                'field' => 'video',
                'show_title' => true,
                'title' => 'Programme Videos',
                'button_text' => 'Add New',
                'sub_fields' =>
                [
                    [
                        'type' => 'image-upload',
                        'field' => 'thumbnail',
                        'title' => 'Thumbnail',
                    ],
                    [
                        'type' => 'textinput',
                        'field' => 'video',
                        'title' => 'Video',
                    ],
                    [
                        'type' => 'textinput',
                        'field' => 'title',
                        'title' => 'Title',
                    ]
                ]
            ])
             
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection