<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('je demande ma reunion') }}
        </h2>


    </x-slot>

    <x-jet-authentication-card>

<form action=""  method="get">
    <div class="mt-4">
        <x-jet-label for="date" value="{{ __('date de debut') }}" />
        <x-jet-input id="datedebut" class="block mt-1 w-full" type="date" name="datedebut"  required autofocus />

    </div>
    <div class="mt-4">
        <x-jet-label for="time" value="{{ __('heure de debut') }}" />
        <x-jet-input id="time" class="block mt-1 w-full" type="time" name="timedebut"  required autofocus />

    </div>




    <div class="mt-4">
        <x-jet-label for="date" value="{{ __('date de fin') }}" />
        <x-jet-input id="datefin" class="block mt-1 w-full" type="date" name="datefin"  required autofocus />

    </div>
    <div class="mt-4">
        <x-jet-label for="time" value="{{ __('heure de fin') }}" />
        <x-jet-input id="time" class="block mt-1 w-full" type="time" name="timefin"  required autofocus />

    </div>
    <div class="mt-4">
        <x-jet-label for="time" value="{{ __('heure de fin') }}" />
        <x-jet-input id="time" class="block mt-1 w-full" type="time" name="timefin"   required autofocus />

    </div>

    <div class="mt-4">
        <x-jet-label for="salle" value="{{ __('nom de la salle') }}" />

        <select class="form-select" aria-label="Default select " required autofocus>
            <option selected>choisissez un salle </option>
            <option value="salleM">salleM</option>
            <option value="salleDSI">salleDSI</option>
            <option value="salle3">salle3</option>
            <option value="salle4">salle4</option>
          </select>

    </div>


    <div class="flex items-center justify-center mt-4">
        <x-jet-button class="ml-4">
           {{ __('Valider') }}
        </x-jet-button>
    </div>
   </form>
   @if ($message = Session::get('success')) <div class="alert alert-success alert-block"> <button type="button" class="close" data-dismiss="alert">×</button> <strong>{{ $message }}</strong> </div> @endif
    <div>


     </div>
    </x-jet-authentication-card>
</x-app-layout>




