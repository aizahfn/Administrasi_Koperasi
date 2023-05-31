<x-layout bodyClass="g-sidenav-show  bg-gray-200 virtual-reality">

    <div class="mt-n3">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Virtual Reality"></x-navbars.navs.auth>
        <!-- End Navbar -->
    </div>
    <div class="border-radius-xl mx-2 mx-md-3 position-relative"
        style="background-image: url('{{ asset('assets') }}/img/vr-bg.jpg'); background-size: cover;">
        <x-navbars.sidebar activePage="virtual-reality"></x-navbars.sidebar>
        @livewire('berkas-table')
        @livewireScripts()
    </div>
    <x-footers.auth>
        </x-footer.auth>
        <x-plugins></x-plugins>
</x-layout>
