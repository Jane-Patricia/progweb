@if(session('insert'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
        <strong>{{ session('insert') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('delete'))
    <div class="alert alert-primary alert-dismissible fade show mt-4" role="alert">
        <strong>{{ session('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('update'))
    <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
        <strong>{{ session('update') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif