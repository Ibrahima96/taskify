<x-layout>
    <x-slot:title>Modifier Taskify</x-slot:title>

    <h2 class="text-center text-xl font-black mb-3">Modifier Taskify 🫰</h2>

    <div class="card bg-base-300 shadow mt-8">
        <div class="card-body">
            <div>
                <form action="{{ route('task.update', $task->id) }}" method="POST" class="min-w-2xl mx-auto">
                    @csrf
                    @method('PUT')

                    <label class="label block mb-3">
                        <input type="text" name="title" class="input w-full text-gray-100" placeholder="Titre"
                            value="{{ old('title', $task->title) }}">
                    </label>

                    <label class="label block mb-3">
                        <input type="text" name="description" class="input w-full text-gray-100"
                            placeholder="Description" value="{{ old('description', $task->description) }}">
                    </label>
                    <label class="label block mb-3">
                        <input type="checkbox" name="is_done" value="1" class="checkbox"
                            {{ old('is_done', $task->is_done) ? 'checked' : '' }}>

                    </label>

                    <button type="submit" class="btn btn-accent">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
