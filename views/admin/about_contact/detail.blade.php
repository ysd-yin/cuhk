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
                'field' => 'banner_title',
                'Title' => 'Banner Title'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_1',
                'Title' => 'Title 1'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_2',
                'Title' => 'Title 2'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'website',
                'title' => 'Website',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'email',
                'title' => 'Email',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_title',
                'title' => 'Undergraduate Office Title',
            ])

            @row([
                'type' => 'textarea',
                'field' => 'undergraduate_office_address',
                'title' => 'Undergraduate Office Address',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_map',
                'title' => 'Undergraduate Office Map',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_tel',
                'title' => 'Undergraduate Office Tel',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_fax',
                'title' => 'Undergraduate Office Fax',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_fb',
                'title' => 'Undergraduate Office Facebook',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_in',
                'title' => 'Undergraduate Office Linkedin',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_ig',
                'title' => 'Undergraduate Office Instagram',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_wechat',
                'title' => 'Undergraduate Office Wechat',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'undergraduate_office_youtube',
                'title' => 'Undergraduate Office Youtube',
            ])
             
            @row([
                'type' => 'textinput',
                'field' => 'faculty_law_title',
                'title' => 'Faculty of Law Title',
            ])

            @row([
                'type' => 'textarea',
                'field' => 'faculty_law_address',
                'title' => 'Faculty of Law Address',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'faculty_law_map',
                'title' => 'Faculty of Law Map',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'faculty_law_tel',
                'title' => 'Faculty of Law Tel',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'faculty_law_fax',
                'title' => 'Faculty of Law Fax',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'faculty_law_fb',
                'title' => 'Faculty of Law Facebook',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'faculty_law_twitter',
                'title' => 'Faculty of Law Twitter',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'faculty_law_ln',
                'title' => 'Faculty of Law Linkedin',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'faculty_law_youtube',
                'title' => 'Faculty of Law Youtube',
            ])
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection