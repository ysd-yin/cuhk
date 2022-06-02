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
                'title' => 'Second Section Title 1',
                'field' => 'second_title_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Second Section Title 2',
                'field' => 'second_title_2',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Second Section Left Description',
                'field' => 'second_left_description',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Second Section Left URL',
                'field' => 'second_left_url',
            ])

<b>If the link is a internal page, e.g. about-programme-overview (do not contain "/" at the front) <br>

    If the link is a internal file, e.g. /storage/media/Admissions/brochure.pdf (Please contain "/" at the front)</b><br><br>
    

            @row([
                'type' => 'textarea',
                'title' => 'Icon 1',
                'field' => 'icon_1',
            ])

            @row([
                'type' => 'textarea',
                'title' => 'Icon 2',
                'field' => 'icon_2',
            ])

            @row([
                'type' => 'textarea',
                'title' => 'Icon 3',
                'field' => 'icon_3',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Third Section title 1',
                'field' => 'third_title_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Third Section title 2',
                'field' => 'third_title_2',
            ])

            @row([
                'type' => 'textarea',
                'title' => 'Third Section Description',
                'field' => 'third_description',
            ])

            @repeater([
                'field' => 'point',
                'show_title' => true,
                'title' => 'Bullet Point',
                'button_text' => 'Add New',
                'sub_fields' =>
                [
                    [
                        'type' => 'textarea',
                        'title' => 'Description',
                        'field' => 'description'
                    ],
                ]
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Third Section URL',
                'field' => 'third_url',
            ])

<b>If the link is a internal page, e.g. about-programme-overview (do not contain "/" at the front) <br>

    If the link is a internal file, e.g. /storage/media/Admissions/brochure.pdf (Please contain "/" at the front)</b><br><br>

            @row([
                'type' => 'textinput',
                'title' => 'Forth Section title 1',
                'field' => 'forth_title_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Forth Section title 2',
                'field' => 'forth_title_2',
            ])

            @row([
                'type' => 'textarea',
                'title' => 'Forth Section Description',
                'field' => 'forth_description',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Forth Section URL',
                'field' => 'forth_url',
            ])

            <b>If the link is a internal page, e.g. about-programme-overview (do not contain "/" at the front) <br>

                If the link is a internal file, e.g. /storage/media/Admissions/brochure.pdf (Please contain "/" at the front)</b><br><br>

            @row([
                'type' => 'textinput',
                'title' => 'Year 1-3 First Description',
                'field' => 'year_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Year 4 First Description',
                'field' => 'year_4_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Year 4 Second Description',
                'field' => 'year_4_2',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Year 5 First Description',
                'field' => 'year_5_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Year 5 Second Description',
                'field' => 'year_5_2',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Year 5 Third Description',
                'field' => 'year_5_3',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Year 5 Forth Description',
                'field' => 'year_5_4',
            ])
            @row([
                'type' => 'textinput',
                'title' => 'PCLL First Description',
                'field' => 'year_pcll',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Fifth Section title 1',
                'field' => 'fifth_title_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Fifth Section title 2',
                'field' => 'fifth_title_2',
            ])

            @row([
                'type' => 'editor',
                'title' => 'Fifth Section Description',
                'field' => 'fifth_description',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Fifth Section URL',
                'field' => 'fifth_url',
            ])

<b>If the link is a internal page, e.g. about-programme-overview (do not contain "/" at the front) <br>

    If the link is a internal file, e.g. /storage/media/Admissions/brochure.pdf (Please contain "/" at the front)</b><br><br>

            @row([
                'type' => 'textinput',
                'title' => 'Sixth Section title 1',
                'field' => 'sixth_title_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Sixth Section title 2',
                'field' => 'sixth_title_2',
            ])

            @row([
                'type' => 'textarea',
                'title' => 'Sixth Section Description',
                'field' => 'sixth_desc',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Sixth Section URL',
                'field' => 'sixth_url',
            ])

<b>If the link is a internal page, e.g. about-programme-overview (do not contain "/" at the front) <br>

    If the link is a internal file, e.g. /storage/media/Admissions/brochure.pdf (Please contain "/" at the front)</b><br><br>

            @row([
                'type' => 'textinput',
                'title' => 'Ball 1',
                'field' => 'ball_1',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Ball 2',
                'field' => 'ball_2',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Ball 3',
                'field' => 'ball_3',
            ])
            
            @row([
                'type' => 'textinput',
                'title' => 'Ball 4',
                'field' => 'ball_4',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Ball 5',
                'field' => 'ball_5',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Ball 6',
                'field' => 'ball_6',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Ball 7',
                'field' => 'ball_7',
            ])

            @row([
                'type' => 'textinput',
                'title' => 'Ball 8',
                'field' => 'ball_8',
            ])
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection