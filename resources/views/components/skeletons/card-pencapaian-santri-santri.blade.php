<x-cards.basic-card {{ $attributes->merge(['class' => 'file-manager-item file']) }}>
    <div class="bg-opacity-50 card-img-top file-logo-wrapper">
    </div>
    <div class="card-body">
        <div class="mb-1 content-wrapper">
            <p class="card-text file-name">
                <span class="fw-bold badge rounded-pill bg-light w-75" style="height: 10px;">{{ ' ' }}</span>
            </p>
            <p class="fw-bold badge rounded-pill bg-light" style="height: 10px; width: 62px;">{{ ' ' }}</p>
        </div>
        <p class="mb-1 fw-bold badge rounded-pill bg-light w-25">{{ ' '
            }}</p>
        <small class="file-accessed text-muted">
            <span class="fw-bold badge rounded-pill bg-light w-100">{{ ' '
                }}</span>
            <span class="fw-bold badge rounded-pill bg-light w-75">{{ ' '
                }}</span>
            <span class="fw-bold badge rounded-pill bg-light">{{ ' ' }}</span>
            <span class="fw-bold badge rounded-pill bg-light">{{ ' ' }}</span>
            <span class="fw-bold badge rounded-pill bg-light w-25">{{ ' '
                }}</span>
            <span class="fw-bold badge rounded-pill bg-light w-25">{{ ' '
                }}</span>
            <span class="fw-bold badge rounded-pill bg-light w-25">{{ ' '
                }}</span>
            <span class="fw-bold badge rounded-pill bg-light">{{ ' ' }}</span>
            <span class="fw-bold badge rounded-pill bg-light w-75">{{ ' '
                }}</span>
        </small>
    </div>
</x-cards.basic-card>