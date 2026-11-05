<div class="card shadow-sm mb-3 border-0">

    <div class="card-body">

        <h5 class="card-title fw-bold">
            {{ $idea->title }}
        </h5>

        <p class="card-text text-secondary">
            {{ $idea->description }}
        </p>

        <small class="text-muted">
            Submitted:
            {{ $idea->created_at->format('d M Y, h:i A') }}
        </small>

    </div>

</div>