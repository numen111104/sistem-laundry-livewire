@props(['backBtn','hideHomeBtn'])

<div class="header header-fixed header-logo-center mb-2" >

    @isset($pageTitle)
        <a class="header-title">
            {{ $pageTitle }}
        </a>
    @endisset

    @isset($backBtn)
        <a {{ $backBtn->attributes->merge(['class' => 'header-icon header-icon-1', 'href' => '/' ])  }} ><i class="fas fa-arrow-left"></i></a>
    @endisset

    <a href="#" data-toggle-theme="" class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
    {{-- <a href="#" data-menu="menu-table-of-contents" class="header-icon header-icon-3"><i class="fa-solid fa-bell"></i><span class="badge bg-highlight">5</span></a> --}}
</div>
