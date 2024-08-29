<div class="col-sm">
    <div class="d-flex justify-content-center">
        <div type="button" data-bs-toggle="modal" data-bs-target="#{{ $modal }}Modal">
            <img src="/images/{{ $image }}" alt="headshot" class="shadow rounded"
                 style="height: 350px; width: 100%; object-fit: cover;">
        </div>
    </div>
    <div class="text-center mt-2">
        <h2><strong>{{ $name }}</strong></h2>
        <p>
            {{ $title }}
        </p>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="{{ $modal }}Modal" tabindex="-1" aria-labelledby="{{ $modal }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: none; padding: 10px 10px 0 0;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                {!! $bio !!}
            </div>
        </div>
    </div>
</div>
