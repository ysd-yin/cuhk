<div class="card">
    <div class="card-header">Seo Setting</div>
    <div class="card-body">

        <input type="hidden" name="relation[seo][post_id]" value="{{ $id }}">
        <input type="hidden" name="relation[seo][id]" value="{{ isset($record->seo->id) ? $record->seo->id : '' }}">

        @row([
            'type' => 'textinput',
            'field' => 'title',
            'relation' => 'seo',
        ])

        @row([
            'type' => 'textarea',
            'field' => 'description',
            'relation' => 'seo',
        ])

        @row([
            'type' => 'image-upload',
            'field' => 'og_image',
            'title' => 'OG Image',
            'relation' => 'seo',
        ])

    </div>
</div>