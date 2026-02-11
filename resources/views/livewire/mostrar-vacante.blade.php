<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-white my-3">
            {{ $vacante->titulo }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-700 my-10">
            <p class="font-bold text-sm uppercase text-white my-3">Empresa:
                <span class="normal-case font-normal">{{$vacante->empresa}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-white my-3">Ultimo dia para postularse:
                <span class="normal-case font-normal">{{$vacante->ultimo_dia->
                toFormattedDateString()}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-white my-3">Categoria:
                <span class="normal-case font-normal">{{$vacante->categoria->categoria}}</span>
            </p>

            <p class="font-bold text-sm uppercase text-white my-3">Salario:
                <span class="normal-case font-normal">{{$vacante->salario->salario}}</span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">

        <div class="md:col-span-2">
            <img src="{{ asset('storage/' . $vacante->imagen) }}" alt=
            "{{ 'Imagen Vacante' . $vacante->titulo }}">
        </div>

        <div class="md:col-span-4 text-white">
            <h2 class="text-2xl font-bold mb-5" >Descripcion del Puesto</h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-700 border-dashed p-5 text-center text-gray-300">
            <p>
                ¿Deseas aplicar a esta Vacante? 
                <a href="{{ route('register') }}" 
                class="font-bold text-indigo-600">Obten una cuenta y aplica a esta y otras vacantes
                </a>
            </p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante"/>
    @endcannot

</div>
