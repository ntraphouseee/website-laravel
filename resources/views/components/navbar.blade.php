<nav class="bg-[#50060F]" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="images/logo.png" alt="Your Company" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/profile" :active="request()->is('profile')">Profile</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                <x-nav-link href="/student" :active="request()->is('student')">Tabel Siswa</x-nav-link>
                <x-nav-link href="/guardian" :active="request()->is('guardian')">Guardian</x-nav-link>
                <x-nav-link href="/teacher" :active="request()->is('teacher')">Tabel Guru</x-nav-link>
                <x-nav-link href="/subject" :active="request()->is('subject')">Mata Pelajaran</x-nav-link>
                
                {{-- BARU: Tautan Classroom untuk Desktop --}}
                <x-nav-link href="{{ route('classroom.index') }}" :active="request()->routeIs('classroom.index')">Classroom</x-nav-link>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">

            <div class="relative ml-3">
              <div>
                <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-[#50060F] text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-8 rounded-full" src="https://i.pinimg.com/736x/d8/67/f3/d867f3789dd7f97b7883277ccd15e6bb.jpg" alt="" />
                </button>
              </div>

              <div     
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="#" class="block px-4 py-2 text-sm text-[#50060F]" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-[#50060F]" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-[#50060F]" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            
            {{-- Ikon hamburger --}}
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            
            {{-- Ikon 'X' --}}
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    
    {{-- Mobile menu --}}
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        
        {{-- Tautan Mobile (menggunakan tag <a> standar, kita perlu menyesuaikannya) --}}
        
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/profile" :active="request()->is('profile')">Profile</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        <x-nav-link href="/student" :active="request()->is('student')">Tabel Siswa</x-nav-link>
        <x-nav-link href="/guardian" :active="request()->is('guardian')">Guardian</x-nav-link>
        <x-nav-link href="/teacher" :active="request()->is('teacher')">Tabel Guru</x-nav-link>
  <x-nav-link href="/subject" :active="request()->is('subject')">Mata Pelajaran</x-nav-link>
        {{-- BARU: Tautan Classroom untuk Mobile --}}
        <x-nav-link href="{{ route('classroom.index') }}" :active="request()->routeIs('classroom.index')">Classroom</x-nav-link>
        
      </div>
      
       {{-- User Profile Mobile (opsional, tergantung struktur penuh Anda) --}}
    </div>
</nav>
