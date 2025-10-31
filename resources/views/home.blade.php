<x-layout>
    <x-slot:title>Welcome</x-slot:title>
    <div class="max-w-2xl mx-auto">
        @if (session('success'))
            <div class="animate-fade-out  alert-success alert-soft mb-3" role="alert">
                <span class="alert alert-soft block"> {{ session('success') }}</span>
            </div>
        @endif


        @forelse ($tasks as $task)
            <div class="card bg-base-300 shadow mt-8 ">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="flex justify-between items-center ">
                            <h1 class="text-3xl font-bold">{{ $task->title }} </h1>
                            @if ($task->is_done != 0)
                                <span class="badge badge-success badge-soft  block">en Terminer</span>
                            @else
                                <span class="badge badge-warning badge-soft block">en attente</span>
                            @endif

                        </div>
                        <p class="mt-4 text-base-content/60 mb-2">{{ $task->description }} </p>

                        <div class="flex gap-3">
                            <form action="{{ route('task.destroy', $task->id) }}" method="POST"
                                onsubmit="return confirm('Supprimer cette tâche ?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-error btn-soft">Supprimer</button>
                            </form>
                            <a href="{{ route('task.edit', $task->id) }}"
                                class="btn btn-neutral btn-soft  items-center flex text-white">modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="card bg-base-300 shadow mt-8 ">
                <div class="card-body">
                    <div class="p-5">
                        <h1 class="text-3xl font-bold">Oups ! </h1>
                        <p class="mt-4 text-base-content/60">Pas de task pour Taskify pour le moment </p>
                    </div>
                </div>
            </div>
        @endforelse


    </div>
</x-layout>
