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
                'type' => 'datepicker',
                'field' => 'post_date',
                'title' => 'Date'
            ])

            {{-- @row([
                'type' => 'image-upload',
                'field' => 'thumbnail',
                'title' => 'Thumbnail'
            ]) --}}

            @row([
                'type' => 'radio',
                'field' => 'effect',
                'title' => 'Show Effect',
                'options' => [
                    'default' => 0,
                    'value_key' => 'value',
                    'title_key' => 'title',
                    'list' => [
                        [
                            'title' => 'Yes',
                            'value' => 1,
                        ],
                        [
                            'title' => 'No',
                            'value' => 0,
                        ],
                    ]
                ]
            ])

            @row([
                'type' => 'editor',
                'field' => 'content',
                'title' => 'Content'
            ])
             
            @include('admin.base.status')
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection