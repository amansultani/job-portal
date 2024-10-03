<x-layout> 
    <x-breadcrumbs class="mb-4"
    :links="['Jobs' => route('jobs.index'), $job->title => '#']" />
    <x-job-card class="mb-4" :$job >
        <p class="text-sm text-slate-500 mb-4">
            {!! nl2br(e($job->description)) !!}
        </p>

        <x-link-button :href="route('jobs.index')">
            Go Back
        </x-link-button>
    </x-job-card>

</x-layout>