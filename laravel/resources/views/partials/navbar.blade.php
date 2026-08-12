<nav class="navbar relative flex items-center h-[60px] mx-0 md:mx-6 mt-0 md:mt-2.5 px-3 md:px-4 z-30 md:rounded-md"
    style="background:#13e269; box-shadow:0 1px 8px rgba(0,40,20,0.04);">

    {{-- SECCIÓN IZQUIERDA --}}
    <div class="relative z-20 flex items-center gap-2.5 flex-1 min-w-0">

        <a href="" class="flex items-center gap-2 flex-shrink-0">

            <div class="w-8 h-8 rounded-full bg-white overflow-hidden flex items-center justify-center shadow-sm">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRINWK8aAEVsllX5dd1AWtOEe9e8ARniPlOLFfgNtXQrA&s=10"
                    alt="Logo"
                    class="block w-full h-full object-cover"
                >
            </div>

            <span class="text-base font-black tracking-tight text-white">
                El Amauta
            </span>

        </a>

        <button
            type="button"
            class="menubar hidden md:flex items-center justify-center w-9 h-9 rounded-xl transition-all active:scale-95 flex-shrink-0"
            style="color:#2d8a5e;"
            onmouseover="this.style.background='#f0faf4'"
            onmouseout="this.style.background='transparent'">
        </button>

    </div>

    {{-- BUSCADOR CENTRAL --}}
    <div class="hidden md:flex absolute left-1/2 top-1/2
                -translate-x-1/2 -translate-y-1/2
                w-[38%] max-w-md z-10">

        <div class="relative w-full">

            <label for="navbar-search" class="sr-only">
                Buscar
            </label>

            <span class="material-symbols-outlined pointer-events-none
                         absolute left-3 top-1/2 -translate-y-1/2
                         text-[20px] text-gray-400">
                search
            </span>

            <input
                id="navbar-search"
                type="search"
                name="search"
                placeholder="Buscar..."
                autocomplete="off"
                class="w-full h-10 pl-10 pr-4 rounded-xl
                       bg-white border border-gray-200
                       text-sm text-gray-700
                       placeholder:text-gray-400
                       outline-none shadow-sm
                       transition-all duration-200
                       focus:border-blue-400
                       focus:ring-2 focus:ring-blue-100"
            >

        </div>

    </div>

    {{-- SECCIÓN DERECHA --}}
    <div class="relative z-20 flex items-center gap-1.5 flex-shrink-0">

        <div class="hidden sm:flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold"
            style="background:#f0faf4; border:1px solid #b0ddbe; color:#1f6b47;">

            <span class="relative flex h-[6px] w-[6px] flex-shrink-0">

                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-60"
                    style="background:#45ad75;">
                </span>

                <span
                    class="relative inline-flex rounded-full h-[6px] w-[6px]"
                    style="background:#2d8a5e;">
                </span>

            </span>

            Activa

        </div>

        <button
            type="button"
            class="flex items-center justify-center w-16 h-9 rounded-xl
                   transition-all duration-150 active:scale-95 ml-4"
            style="border:1px solid #e4f0e9; color:#000000;"
            onmouseover="this.style.background='#fff5f5'; this.style.color='#dc2626'; this.style.borderColor='#fecaca'"
            onmouseout="this.style.background='transparent'; this.style.color='#000000'; this.style.borderColor='#e4f0e9'"
            title="Cerrar sesión">

            <span class="material-symbols-outlined text-[20px]">
                logout
            </span>

        </button>

        <div class="relative hidden md:block">

            <div
                id="navUserDropdown"
                class="hidden absolute top-full right-0 mt-2 w-64 bg-white
                       rounded-2xl border border-gray-100 overflow-hidden z-50"
                style="box-shadow:0 8px 32px rgba(0,40,20,0.12);">
            </div>

        </div>

    </div>

</nav>