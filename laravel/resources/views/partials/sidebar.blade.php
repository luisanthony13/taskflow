<div class="sidebar-panel top-0 bottom-0 fixed w-[250px] z-50 transition-transform duration-300 ease-in-out flex flex-col"
    style="background:#649cd9; box-shadow:25px 0 12px rgba(0,40,20,0.06);">

    <div class="flex items-center gap-3 px-5 h-[67px] flex-shrink-0" style="border-bottom:2px solid #e4f0e9;">
        <a href="" class="flex items-center gap-2.5 min-w-0">
            <div class="w-8 h-8 rounded-full bg-white overflow-hidden flex-shrink-0 flex items-center justify-center"
                style="border:0px solid #e4f0e9; box-shadow:0 1px 4px rgba(0,30,15,0.08);">
                
                <a href="/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRINWK8aAEVsllX5dd1AWtOEe9e8ARniPlOLFfgNtXQrA&s=10"
                    alt="Logo" class="w-full h-full object-contain"></a>
                

            </div>
            <div class="flex items-baseline gap-1.5 min-w-0">
                <span class="text-md font-bold tracking-tight" style="color:#ffffff;font-size:19px">El Amauta</span>

            </div>
        </a>
    </div>

    <div class="flex-1 overflow-y-auto py-4 px-3 custom-scrollbar">

        <nav class="space-y-1">

            {{-- Calendar --}}
            <a href="{{ url('/calendar') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-200
                {{ request()->is('calendar*')
                    ? 'bg-white text-blue-700 shadow-sm'
                    : 'text-slate-100 hover:bg-yellow-500 hover:translate-x-1' }}">

                <span class="material-symbols-outlined">
                    calendar_month
                </span>

                <span>Calendar</span>
            </a>

            {{-- User Profile --}}
            <a href="{{ url('/profile') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-200
                {{ request()->is('profile*')
                    ? 'bg-white text-blue-700 shadow-sm'
                    : 'text-slate-100 hover:bg-yellow-500 hover:translate-x-1' }}">

                <span class="material-symbols-outlined">
                    stacks
                </span>

                <span>User Profile</span>
            </a>

            {{-- Task --}}
            <a href="{{ url('/task') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-200
           {{ request()->is('task*')
               ? 'bg-white text-blue-700 shadow-sm'
               : 'text-slate-100 hover:bg-yellow-500 hover:translate-x-1' }}">

                <span class="material-symbols-outlined">
                    task
                </span>

                <span>Task</span>
            </a>

            {{-- Forms --}}
            <a href="{{ url('/forms') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-200
           {{ request()->is('forms*')
               ? 'bg-white text-blue-700 shadow-sm'
               : 'text-slate-100 hover:bg-yellow-500 hover:translate-x-1' }}">

                <span class="material-symbols-outlined">
                    list_alt
                </span>

                <span>Forms</span>
            </a>

            {{-- Tables --}}
            <a href="{{ url('/tables') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-200
           {{ request()->is('tables*')
               ? 'bg-white text-blue-700 shadow-sm'
               : 'text-slate-100 hover:bg-yellow-500 hover:translate-x-1' }}">

                <span class="material-symbols-outlined">
                    table
                </span>

                <span>Tables</span>
            </a>

            {{-- Pages --}}
            <a href="{{ url('/pages') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-200
           {{ request()->is('pages*')
               ? 'bg-white text-blue-700 shadow-sm'
               : 'text-slate-100 hover:bg-yellow-500 hover:translate-x-1' }}">

                <span class="material-symbols-outlined">
                    pages
                </span>

                <span>Pages</span>
            </a>

        </nav>

    </div>

    <div class="flex-shrink-0 px-4 py-3" style="border-top:1px solid #e4f0e9;">
        <p class="text-xs text-center font-medium" style="color:#032c0f;">
            Página OFFICIAL | Tarapoto
        </p>
    </div>

</div>
