<x-layout title="IdeaHub - Share Your Ideas">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <!-- Page Heading -->
            <div class="text-center mb-5">

                <h1 class="fw-bold">
                    Share Your Ideas
                </h1>

                <p class="text-muted">
                    Every great innovation starts with an idea.
                    Share yours with us.
                </p>

            </div>


            <!-- Success Message -->
            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif


            <!-- Idea Submission Form -->
            <div class="card shadow-sm border-0 mb-5">

                <div class="card-body p-4">

                    <h4 class="mb-4">
                        Submit Your Idea
                    </h4>

                    <form action="{{ route('ideas.store') }}"
                          method="POST">

                        @csrf

                        <!-- Title -->
                        <div class="mb-3">

                            <label class="form-label">
                                Idea Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                placeholder="Enter your idea title"
                                value="{{ old('title') }}"
                            >

                            @error('title')
                                <div class="text-danger small">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- Description -->
                        <div class="mb-3">

                            <label class="form-label">
                                Idea Description
                            </label>

                            <textarea
                                name="description"
                                class="form-control"
                                rows="4"
                                placeholder="Describe your idea..."
                            >{{ old('description') }}</textarea>

                            @error('description')
                                <div class="text-danger small">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- Submit Button -->
                        <button type="submit"
                                class="btn btn-primary w-100">

                            Submit Idea

                        </button>

                    </form>

                </div>

            </div>


            <!-- Submitted Ideas -->
            <h3 class="fw-bold mb-4">
                Recently Submitted Ideas
            </h3>

            @forelse($ideas as $idea)

                <x-idea-card :idea="$idea" />

            @empty

                <div class="alert alert-info">
                    No ideas submitted yet.
                    Be the first to share one!
                </div>

            @endforelse

        </div>

    </div>

</x-layout>