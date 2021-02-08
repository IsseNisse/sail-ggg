<x-master>
    <h1 class="my-5 d-flex justify-content-center">TERMINAL GAME</h1>
        <div class="container">
            <div class="d-flex justify-content-center">
                <p class="text-white w-75">Tag i akt, detta spel kommer att sluka er in i ett massivt äventyr som tar er runtom i Umeå på bekostnad av era fötter.</p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="text-white w-75">Vi anser att ni är gruppen som detta uppdraget är bäst lämpade för och därför är ni dem som får visitera Umeå för ledtrådar vilka leder till NTIs server. Ni kan nog inte ens gå efter vad som kommer att valkas, men ni kör hårt och ni gör ert bästa.</p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="text-white w-75">Skriv in ert lagnamn och klicka på Startknappen för att börja.</p>
            </div>
            <form method="POST" action="{{ route('register') }}" class="my-4">
                @csrf
        
                <div class="container w-80">
                    <h3 class="text-center mb-2">Vad är erat lagnamn</h3>
                    <div class="row mb-3 form-control-lg d-flex justify-content-center">
                        <input id="name" type="text" class="text input-border" name="name" value="{{ old('name') }}"
                            required autocomplete="name">
                        @error('name')
                            <p class="text-danger" role="alert">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
        
                    <div class="row mb-3 w-50 mx-auto d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-dark gradient text-white shadow-sm">
                            Skicka
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <footer class="d-flex justify-content-center fixed-bottom">
            <p class="text-white text-footer">Copyright 2020 | Goo Goo Gnomes</p>
        </footer>
</x-master>