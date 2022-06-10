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
                'field' => 'upper_menu_title_1',
                'title' => 'Upper Menu Title 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'upper_menu_title_2',
                'title' => 'Upper Menu Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'upper_menu_title_3',
                'title' => 'Upper Menu Title 3'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'current_url',
                'title' => 'Upper Menu 3 URL'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'upper_menu_title_4',
                'title' => 'Upper Menu 4'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'careers_title_1',
                'title' => 'Upper Menu 4 Sub Menu Title 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'careers_url_1',
                'title' => 'Upper Menu 4 Sub Menu URL'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'careers_title_2',
                'title' => 'Upper Menu 4 Sub Menu Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'careers_url_2',
                'title' => 'Upper Menu 4 Sub Menu URL'
            ])

<b>If the link is a internal page, e.g. about-programme-overview (do not contain "/" at the front) <br>

    If the link is a internal file, e.g. /storage/media/Admissions/brochure.pdf (Please contain "/" at the front)</b><br><br>

            @row([
                'type' => 'textinput',
                'field' => 'upper_menu_title_5',
                'title' => 'Upper Menu Title 5'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'about_menu',
                'title' => 'About Menu Title'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'about_menu_1',
                'title' => 'About Menu Title 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'about_menu_2',
                'title' => 'About Menu Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'about_menu_3',
                'title' => 'About Menu Title 3'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'about_menu_4',
                'title' => 'About Menu Title 4'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'about_menu_5',
                'title' => 'About Menu Title 5'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'about_menu_6',
                'title' => 'About Menu Title 6'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'about_menu_7',
                'title' => 'About Menu Title 7'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'curriculum_menu',
                'title' => 'Curriculum Menu Title'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'curriculum_menu_1',
                'title' => 'Curriculum Menu Title 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'curriculum_menu_2',
                'title' => 'Curriculum Menu Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'student_menu',
                'title' => 'Student Enrichment Menu Title'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'student_menu_1',
                'title' => 'Student Enrichment Menu Title 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'student_menu_2',
                'title' => 'Student Enrichment Menu Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'student_voices_menu',
                'title' => 'Student Voices Menu Title'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'career_menu',
                'title' => 'Career Prospects Menu Title'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'admissions_menu',
                'title' => 'Admissions Menu Title'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'admissions_menu_1',
                'title' => 'Admissions Menu Title 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'admissions_menu_2',
                'title' => 'Admissions Menu Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'admissions_menu_3',
                'title' => 'Admissions Menu Title 3'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'admissions_menu_4',
                'title' => 'Admissions Menu Title 4'
            ])
             
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection