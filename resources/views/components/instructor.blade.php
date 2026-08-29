<div class="col">
    <div class="faculty-card h-100 text-center">
        <button type="button" class="faculty-card-button" data-bs-toggle="modal" data-bs-target="#{{ $modal }}Modal">
            <img src="/images/{{ $image }}" alt="{{ $name }} headshot" class="faculty-headshot shadow">
        </button>
        <div class="faculty-card-copy">
            <h2><strong>{{ $name }}</strong></h2>
            <p>{{ $title }}</p>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="{{ $modal }}Modal" tabindex="-1" aria-labelledby="{{ $modal }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> {{$name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark faculty-bio">
                {!! $bio !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
