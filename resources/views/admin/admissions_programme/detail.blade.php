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
                'field' => 'jupas_code',
                'title' => 'Jupas Code',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'url',
            ])

            @row([
                'type' => 'textarea',
                'field' => 'jupas_description',
                'title' => 'Jupas Description',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'jupas_title',
                'title' => 'Jupas Title',
            ])

            @repeater([
                'field' => 'jupas_details',
                'show_title' => true,
                'title' => 'Jupas Details',
                'button_text' => 'Add New',
                'sub_fields' =>
                [
                    [
                        'type' => 'textinput',
                        'field' => 'subject',
                        'title' => 'Subject',
                    ],
                    [
                        'type' => 'textinput',
                        'field' => 'score',
                        'title' => 'Minimum Score (Weighting)',
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