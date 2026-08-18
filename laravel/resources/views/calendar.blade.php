@extends('layouts.app')

@section('content')

<div class="min-h-[calc(100vh-60px)] bg-slate-50 p-4 md:p-6">

    {{-- PRESENTACIÓN PRINCIPAL --}}
    <section
        class="relative overflow-hidden rounded-3xl p-6 md:p-10 text-white shadow-lg"
        style="background:linear-gradient(135deg,#0f27a0,#13b5e2);">

        {{-- Decoración --}}
        <div class="absolute -right-16 -top-20 h-56 w-56 rounded-full bg-white/10"></div>
        <div class="absolute right-28 -bottom-24 h-48 w-48 rounded-full bg-white/10"></div>

        <div class="relative z-10 flex items-center justify-between gap-8">

            <div class="max-w-2xl">

                <div class="mb-4 inline-flex items-center gap-2 rounded-full
                            bg-white/20 px-4 py-1.5 text-sm font-semibold">

                    <span class="material-symbols-outlined text-[19px]">
                        school
                    </span>

                    Educación peruana
                </div>

                <h1 class="text-3xl font-black tracking-tight md:text-5xl">
                    Bienvenidos a Calendario
                </h1>

                <p class="mt-4 max-w-xl text-sm leading-7 text-white/90 md:text-base">
                    Un espacio creado para reconocer, acompañar y fortalecer el
                    trabajo de los maestros que forman a las nuevas generaciones
                    del Perú.
                </p>

                <a href="#maestros"
                   class="mt-6 inline-flex items-center gap-2 rounded-xl bg-white
                          px-5 py-2.5 text-sm font-bold text-emerald-700
                          shadow-md transition-all duration-200
                          hover:-translate-y-0.5 hover:shadow-lg">

                    Conocer más

                    <span class="material-symbols-outlined text-[19px]">
                        arrow_forward
                    </span>
                </a>

            </div>

            <div class="hidden h-40 w-40 flex-shrink-0 items-center
                        justify-center rounded-full bg-white/20 lg:flex">

                <span class="material-symbols-outlined text-[100px] text-white">
                    cast_for_education
                </span>

            </div>

        </div>
    </section>

    {{-- TARJETAS INFORMATIVAS --}}
    <section class="mt-6 grid gap-5 md:grid-cols-3">

        <article class="rounded-2xl border border-slate-100 bg-white p-5 shadow-sm
                        transition-all duration-200 hover:-translate-y-1 hover:shadow-md">

            <div class="flex h-12 w-12 items-center justify-center rounded-xl
                        bg-blue-100 text-blue-600">

                <span class="material-symbols-outlined text-[28px]">
                    groups
                </span>
            </div>

            <h2 class="mt-4 text-lg font-bold text-slate-800">
                Comunidad docente
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-600">
                Promovemos el intercambio de experiencias, conocimientos y buenas
                prácticas entre maestros de diferentes regiones del país.
            </p>
        </article>

        <article class="rounded-2xl border border-slate-100 bg-white p-5 shadow-sm
                        transition-all duration-200 hover:-translate-y-1 hover:shadow-md">

            <div class="flex h-12 w-12 items-center justify-center rounded-xl
                        bg-amber-100 text-amber-600">

                <span class="material-symbols-outlined text-[28px]">
                    menu_book
                </span>
            </div>

            <h2 class="mt-4 text-lg font-bold text-slate-800">
                Formación continua
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-600">
                Facilitamos recursos y oportunidades que ayudan a fortalecer las
                capacidades pedagógicas y profesionales de los docentes.
            </p>
        </article>

        <article class="rounded-2xl border border-slate-100 bg-white p-5 shadow-sm
                        transition-all duration-200 hover:-translate-y-1 hover:shadow-md">

            <div class="flex h-12 w-12 items-center justify-center rounded-xl
                        bg-emerald-100 text-emerald-600">

                <span class="material-symbols-outlined text-[28px]">
                    workspace_premium
                </span>
            </div>

            <h2 class="mt-4 text-lg font-bold text-slate-800">
                Reconocimiento
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-600">
                Valoramos la vocación, el esfuerzo y el compromiso de quienes
                contribuyen diariamente al desarrollo de la educación peruana.
            </p>
        </article>

    </section>

    {{-- INFORMACIÓN DEL MAESTRO --}}
    <section id="maestros"
             class="mt-6 grid gap-6 rounded-2xl border border-slate-100
                    bg-white p-6 shadow-sm lg:grid-cols-2">

        <div>

            <span class="text-sm font-bold uppercase tracking-wider text-emerald-600">
                Nuestra inspiración
            </span>

            <h2 class="mt-2 text-2xl font-black text-slate-800">
                El maestro peruano
            </h2>

            <p class="mt-3 text-sm leading-7 text-slate-600">
                El maestro no solamente transmite conocimientos. También orienta,
                escucha, inspira y acompaña a sus estudiantes durante su formación.
                Su trabajo es fundamental para construir una sociedad más justa,
                responsable y preparada.
            </p>

            <div class="mt-5 space-y-3">

                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-emerald-600">
                        lightbulb
                    </span>
                    <span class="text-sm font-medium text-slate-700">
                        Guía y promueve aprendizajes significativos.
                    </span>
                </div>

                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-emerald-600">
                        favorite
                    </span>
                    <span class="text-sm font-medium text-slate-700">
                        Educa con vocación, respeto y empatía.
                    </span>
                </div>

                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-emerald-600">
                        diversity_3
                    </span>
                    <span class="text-sm font-medium text-slate-700">
                        Fortalece la identidad y la convivencia.
                    </span>
                </div>

            </div>

        </div>

        {{-- MENSAJE --}}
        <div class="flex items-center rounded-2xl bg-emerald-50 p-6">

            <div>

                <span class="material-symbols-outlined text-[42px] text-emerald-600">
                    format_quote
                </span>

                <p class="mt-2 text-lg font-bold leading-8 text-emerald-900">
                    “Cada maestro deja una enseñanza que continúa acompañando
                    a sus estudiantes durante toda la vida”.
                </p>

                <p class="mt-4 text-sm font-semibold text-emerald-700">
                    Comunidad Amauta
                </p>

            </div>

        </div>

    </section>

</div>

@endsection
