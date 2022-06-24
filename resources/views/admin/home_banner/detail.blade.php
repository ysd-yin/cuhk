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
            {{-- @row([
                'type' => 'textinput',
                'has_language' => true,
                'title' => 'Title Internal',
                'field' => 'title_internal',
            ]) --}}

            @row([
                'type' => 'editor',
                'title' => 'Title 1',
                'field' => 'title_1',
            ])
            <b>
                By default the system will set the default color when it is black, but it's flexible to change the color if you want.
            </b>
            @row([
                'type' => 'editor',
                'title' => 'Title 2',
                'field' => 'title_2',
            ])
            <b>
                By default the system will set the default color when it is black, but it's flexible to change the color if you want.
            </b>
            {{-- @row([
                'type' => 'textinput',
                'title' => 'Sub title',
                'field' => 'sub_title',
            ]) --}}

            @row([
                'type' => 'editor',
                'title' => 'Sub title',
                'field' => 'title',
            ])
            <b>
                By default the system will set the default color when it is black, but it's flexible to change the color if you want.
            </b>

            @row([
                'type' => 'textinput',
                'field' => 'url',
            ])

<b>If the link is a internal page, e.g. about-programme-overview (do not contain "/" at the front) <br>

    If the link is a internal file, e.g. /storage/media/Admissions/brochure.pdf (Please contain "/" at the front)</b><br>
    
    <b>If it is an external website link, please include https:// at the beginning, for example, https://www.cuhk.edu.hk</b><br>

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
                'type' => 'image-upload',
                'field' => 'image',
                'title' => 'Desktop Image (2880 width X 1520 height px)'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'mobile_image',
                'title' => 'Mobile Image (960 width X 1520 height px)'
            ])
             
            @include('admin.base.status')
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js-before')
@parent
<script>
    mixins.push({
        data: {
            titles: {
                1: 'title1',
                2: 'title2',
                3: 'title3',
            },
            rows: [],
            radio: null,
            autocomplete: '',
        }
    })
</script>
@endsection