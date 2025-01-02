<div {{ $attributes->class(['card card-apply-job']) }}>
    <div class="card-body">
        <div class="mb-1 d-flex justify-content-between align-items-center">
            <div class="flex-row d-flex">
                <div>
                    @isset($avatar)
                        <div {{ $attributes->merge(['class' => 'avatar me-1']) }}>
                            {{ $avatar }}
                        </div>
                    @endisset
                </div>
                <div class="user-info">
                    <h5 class="mb-0">
                        {{ $title }}
                    </h5>
                    <small class="text-muted">
                        @isset($sub_title)
                            {{ $sub_title }}
                        @endisset
                    </small>
                </div>
            </div>

            @isset($label)
                {{ $label }}
            @endisset
        </div>
        <h5 {{ $attributes->merge(['class' => 'apply-job-title text-capitalize']) }}>
            {{ $headingContent }}
        </h5>
        <p class="mb-2 text-justify card-text text-capitalize">{{ $slot }}</p>

        @isset($highlight)
            <div class="rounded apply-job-package bg-light-primary">
                <div>
                    {{ $highlight }}
                </div>
                {{ $highlight_value }}
            </div>
        @endisset

        @isset($action_button)
            <div class="d-grid">
                {{ $action_button }}
            </div>
        @endisset

    </div>
</div>
