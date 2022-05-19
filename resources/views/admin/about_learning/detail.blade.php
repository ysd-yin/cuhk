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
                'field' => 'title_1',
                'Title' => 'Title 1',
            ])

            @row([
                'type' => 'textinput',
                'field' => 'title_2',
                'Title' => 'Title 2',
            ])

            @repeater([
                'field' => 'content',
                'title' => 'Article',
                'button_text' => 'Add New',
                'sub_fields' =>
                [
                    [
                        'type' => 'image-upload',
                        'title' => 'Imge',
                        'field' => 'image'
                    ],
                    [
                        'type' => 'textinput',
                        'title' => 'Title',
                        'field' => 'title'
                    ],
                    [
                        'type' => 'textarea',
                        'title' => 'Description',
                        'field' => 'description'
                    ]
                ]
            ])
                          
            @row([
                'type' => 'textinput',
                'field' => 'image_list_title',
                'title' => 'Image List Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_1',
                'title' => 'Image 1 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_1_title',
                'title' => 'Image 1 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_2',
                'title' => 'Image 2 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_2_title',
                'title' => 'Image 2 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_3',
                'title' => 'Image 3 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_3_title',
                'title' => 'Image 3 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_4',
                'title' => 'Image 4 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_4_title',
                'title' => 'Image 4 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_5',
                'title' => 'Image 5 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_5_title',
                'title' => 'Image 5 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_6',
                'title' => 'Image 6 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_6_title',
                'title' => 'Image 6 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_7',
                'title' => 'Image 7 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_7_title',
                'title' => 'Image 7 Title'
            ])
            
            @row([
                'type' => 'image-upload',
                'field' => 'image_8',
                'title' => 'Image 8 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_8_title',
                'title' => 'Image 8 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_9',
                'title' => 'Image 9 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_9_title',
                'title' => 'Image 9 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_10',
                'title' => 'Image 10 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_10_title',
                'title' => 'Image 10 Title'
            ])
            @row([
                'type' => 'image-upload',
                'field' => 'image_11',
                'title' => 'Image_11 (Vertical)'
            ])
            @row([

                'type' => 'textinput',
                'field' => 'image_11_title',
                'title' => 'Image 11 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_12',
                'title' => 'Image 12 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_12_title',
                'title' => 'Image 12 Title'
            ])
            
            @row([
                'type' => 'image-upload',
                'field' => 'image_13',
                'title' => 'Image 13 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_13_title',
                'title' => 'Image 13 Title'
            ])
                         
            @row([
                'type' => 'image-upload',
                'field' => 'image_14',
                'title' => 'Image 14 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_14_title',
                'title' => 'Image 14 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_15',
                'title' => 'Image 15 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_15_title',
                'title' => 'Image 15 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_16',
                'title' => 'Image 16 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_16_title',
                'title' => 'Image 16 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_17',
                'title' => 'Image 17 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_17_title',
                'title' => 'Image 17 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_18',
                'title' => 'Image 18 (Horizontal)'
            ])
                        
            @row([
                'type' => 'textinput',
                'field' => 'image_18_title',
                'title' => 'Image 18 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_19',
                'title' => 'Image 19 (Horizontal)'
            ])
            @row([
                'type' => 'textinput',
                'field' => 'image_19_title',
                'title' => 'Image 19 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_20',
                'title' => 'Image 20 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_20_title',
                'title' => 'Image 20 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_21',
                'title' => 'Image 21 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_21_title',
                'title' => 'Image 21 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_22',
                'title' => 'Image 22 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_22_title',
                'title' => 'Image 22 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_23',
                'title' => 'Image 23 (Horizontal)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_23_title',
                'title' => 'Image 23 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_24',
                'title' => 'Image 24 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_24_title',
                'title' => 'Image 24 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_25',
                'title' => 'Image 25 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_25_title',
                'title' => 'Image 25 Title'
            ])

            @row([
                'type' => 'image-upload',
                'field' => 'image_26',
                'title' => 'Image 26 (Vertical)'
            ])

            @row([
                'type' => 'textinput',
                'field' => 'image_26_title',
                'title' => 'Image 26 Title'
            ])
        </div>
        @include('admin.base.footer') 
    </div>
    @include('admin.base.seo')
</form>
@endsection
@section('js')
@endsection