
<x-cards.base-card>
    <x-slot name="cardBody">
        <img class="card-img-top img-fluid opacity-25" src="{{ asset('style/app-assets/images/skeleton-image.jpg') }}"
            alt="Blog Post pic" />
        {{-- <div class="card-img-top img-fluid bg-light w-100 h-100"></div> --}}
        <h4 class="card-title mt-2">
            <span class="badge rounded-pill bg-light w-50" style="height: 18px">{{ ' ' }}</span>
            <span class="badge rounded-pill bg-light w-25" style="height: 18px">{{ ' ' }}</span>
        </h4>
        <div class="d-flex">
            <div class="avatar me-50">
                <img src="{{ asset('style/app-assets/images/avatars/no-profile-picture.png') }}"
                    alt="Avatar" width="24" height="24" />
            </div>
            <div class="author-info">
                <span class="badge rounded-pill bg-light" style="width: 12px;">{{ ' ' }}</span>
                <span class="badge rounded-pill bg-light" style="width: 32px;">{{ ' ' }}</span>
                <span class="badge rounded-pill bg-light" style="width: 24px;">{{ ' ' }}</span>
            </div>
        </div>
        <div class="pt-1 pb-2" style="overflow-x: auto; white-space: nowrap; scrollbar-width: none; ">
            <a href="#" style="display: inline-block; float: none; ">
                <span class="badge rounded-pill badge-light-info" style="width: 62px">{{ ' ' }}</span>
            </a>
            <a href="#" style="display: inline-block; float: none; ">
                <span class="badge rounded-pill badge-light-info" style="width: 52px">{{ ' ' }}</span>
            </a>
        </div>
        <p class="card-text blog-content-truncate">
            <span class="badge rounded-pill bg-light w-75">{{ ' ' }}</span>
            <span class="badge rounded-pill bg-light w-50">{{ ' ' }}</span>
            <span class="badge rounded-pill bg-light w-25">{{ ' ' }}</span>
            <span class="badge rounded-pill bg-light w-25">{{ ' ' }}</span>
            <span class="badge rounded-pill bg-light w-25">{{ ' ' }}</span>
        </p>
        <hr />
        <div class="mb-2 d-flex justify-content-start">
            <div class="btn btn-light w-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-star text-white">
                    <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7
                        14.14
                        2 9.27 8.91 8.26 12
                        2">
                    </polygon>
                </svg>
                <span class="badge rounded-pill bg-white w-25">{{ ' ' }}</span>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center ">
            <div class="btn btn-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-eye text-white">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                    </path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <span class="badge rounded-pill bg-white w-25">{{ ' ' }}</span>
            </div>
            <div class="btn btn-light">
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="X200Y200" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check-circle text-white">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span class="badge rounded-pill bg-white w-25">{{ ' ' }}</span>
            </div>
        </div>
    </x-slot>
</x-cards.base-card>
