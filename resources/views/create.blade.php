<x-layout>
    <x-slot:title>Ajouter-taskify</x-slot:title>
    <h2 class="text-center text-xl font-black mb-3">Ajouter Taskify 🫰</h2>
    <div class="card bg-base-300 shadow mt-8 ">
        <div class="card-body">
            <div>
                <form action="{{ route('task.store') }}" class="min-w-2xl mx-auto " method="POST">
                    @csrf
                    <label class="label block mb-3">
                        <input type="text" name="title" class="input w-full text-gray-100 " placeholder="title">
                    </label>
                    <label class="label block mb-3">
                        <input type="text" name="description" class="input w-full text-gray-100"
                            placeholder="description">
                    </label>
                    <label class="label block mb-3">
                        <input type="checkbox" name="is_done" value="1" class="checkbox" />

                    </label>
                    <button class="btn btn-accent">Ajouter </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
