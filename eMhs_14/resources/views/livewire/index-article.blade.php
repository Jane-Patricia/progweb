<div>
    @foreach($art as $a)
        <div class="card">
            <div class="card-header bg-dark">
                <strong class="text-light">Newest Data</strong>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $a->judul }}</h5>
                <p class="card-text">{{ $a->deskripsi }}</p>
            </div>
        </div>
    @endforeach()
</div>
