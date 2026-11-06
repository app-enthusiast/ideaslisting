<div class="card shadow-sm mb-3 border-0">

    <div class="card-body">

        <h5 class="card-title fw-bold">
            {{ $idea->title }}
        </h5>

        <p class="card-text text-secondary">
            {{ $idea->description }}
        </p>

        <small class="text-muted d-block mb-3">
            Submitted:
            {{ $idea->created_at->format('d M Y, h:i A') }}
        </small>

        <div class="d-flex gap-2">

            <!-- Edit Button -->
            <a href="{{ route('ideas.edit', $idea->id) }}"
               class="btn btn-sm btn-primary">

                Edit

            </a>


            <!-- Delete Form -->
            <form action="{{ route('ideas.destroy', $idea->id) }}"
                  method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this idea?')">

                @csrf
                @method('DELETE')

                <button type="submit"
                        class="btn btn-sm btn-danger">

                    Delete

                </button>

            </form>

        </div>

    </div>

</div>