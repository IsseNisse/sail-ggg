<x-master>
    <div>
        <p id="binga">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis dicta sit velit assumenda porro sunt corrupti reiciendis totam, reprehenderit sapiente, hic, itaque exercitationem quibusdam. Iusto deserunt suscipit rem asperiores eius!</p><br>
    </div>
    <form id="form" method="POST" action="/game">
        @csrf
        <input id="input" type="text" name="answer">
        <button type="submit">Submit</button>
    </form>
</x-master>