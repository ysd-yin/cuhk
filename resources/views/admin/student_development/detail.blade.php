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
                'field' => 'description',
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'top_image',
                'title' => 'Top Section Image',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'top_title',
                'title' => 'Top Section Title',
            ])

            @row([
                'type' => 'textarea',
                'field' => 'top_description',
                'title' => 'Top Section Description',
            ])

            @row([
                'type' => 'editor',
                'field' => 'top_content',
                'title' => 'Top Section Content',
            ])

            @repeater([
                'field' => 'content',
                'show_title' => true,
                'title' => 'Block',
                'button_text' => 'Add New',
                'sub_fields' =>
                [
                    [
                        'type' => 'image-upload',
                        'field' => 'image',
                        'title' => 'Image',
                        'options' => [
                            'width' => '15%'
                        ]
                    ],
                    [
                        'type' => 'textinput',
                        'field' => 'title',
                        'title' => 'Title',
                        'options' => [
                            'width' => '35%'
                        ]
                    ],
                    [
                        'type' => 'editor',
                        'field' => 'content',
                        'title' => 'Content',
                        'options' => [
                            'width' => '50%'
                        ]
                    ]
                ]
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'bottom_image',
                'title' => 'Bottom Section Image',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'bottom_title',
                'title' => 'Bottom Section Title',
            ])

            @row([
                'type' => 'editor',
                'field' => 'bottom_content',
                'title' => 'Bottom Section Content',
            ])

        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection