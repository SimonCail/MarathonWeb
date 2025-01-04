<x-app>
    <div class="team-info">
        <h1>Notre Équipe</h1>
        @foreach($teamMembers as $member)
            <div class="team-member">
                <h2>{{ $member }}</h2>
            </div>
        @endforeach
        <a href="{{ route('video') }}" class="btn btn-primary" style="background-color: var(--brown); color: white; margin-top: 5px">Voir la vidéo</a>
    </div>

</x-app>
