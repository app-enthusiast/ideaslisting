<x-layout title="Edit Idea - IdeaHub">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-body p-4">

                    <h3 class="fw-bold mb-4">
                        Edit Your Idea
                    </h3>

                    <form action="{{ route('ideas.update', $idea->id) }}"
                          method="POST">

                        @csrf
                        @method('PUT')

                        <!-- Idea Title -->
                        <div class="mb-3">

                            <label class="form-label">
                                Idea Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ old('title', $idea->title) }}"
                            >

                            @error('title')
                                <div class="text-danger small">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <!-- Idea Description -->
                        <div class="mb-3">

                            <label class="form-label">
                                Idea Description
                            </label>

                            <textarea
                                name="description"
                                class="form-control"
                                rows="5"
                            >{{ old('description', $idea->description) }}</textarea>

                            @error('description')
                                <div class="text-danger small">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <button type="submit"
                                class="btn btn-primary">

                            Update Idea

                        </button>

                        <a href="{{ route('ideas.index') }}"
                           class="btn btn-secondary">

                            Cancel

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</x-layout>