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
                'field' => 'table_title_1',
                'title' => 'Tablt Title 1',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'table_title_2',
                'title' => 'Tablt Title 2',
            ])

            @repeater([
                'field' => 'team_1',
                'show_title' => true,
                'title' => 'Team 1',
                'button_text' => 'Add New',
                'sub_fields' =>
                [
                    [
                        'type' => 'textinput',
                        'title' => 'Course Code',
                        'field' => 'coruse_code'
                    ],
                    [
                        'type' => 'textinput',
                        'title' => 'Course title',
                        'field' => 'course_title'
                    ]
                ]
            ])

            @repeater([
                'field' => 'team_2',
                'show_title' => true,
                'title' => 'Team 2',
                'button_text' => 'Add New',
                'sub_fields' =>
                [
                    [
                        'type' => 'textinput',
                        'title' => 'Course Code',
                        'field' => 'coruse_code'
                    ],
                    [
                        'type' => 'textinput',
                        'title' => 'Course title',
                        'field' => 'course_title'
                    ]
                ]
            ])

            @repeater([
                'field' => 'team_3',
                'show_title' => true,
                'title' => 'Summer Term',
                'button_text' => 'Add New',
                'sub_fields' =>
                [
                    [
                        'type' => 'textinput',
                        'title' => 'Course Code',
                        'field' => 'coruse_code'
                    ],
                    [
                        'type' => 'textinput',
                        'title' => 'Course title',
                        'field' => 'course_title'
                    ]
                ]
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