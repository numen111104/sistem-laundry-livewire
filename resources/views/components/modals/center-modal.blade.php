<div {{ $attributes->class(['modal fade'])->merge(['id' => '', 'tabindex' => '-1', 'aria-hidden' => 'true']) }}>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="bg-transparent modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="pb-5 modal-body px-sm-5 mx-50">
                <h1 class="mb-1 text-center">{{ $modal_title }}</h1>
                @isset($modal_subtitle)
                    <p class="text-center">{{ $modal_subtitle }}</p>
                @endisset
                @isset($modal_form)
                    {{ $modal_form }}
                @endisset
            </div>
        </div>
    </div>
</div>
