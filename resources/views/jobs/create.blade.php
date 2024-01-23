<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post a Job') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 grid gap-6 mb-6 md:grid-cols-1">
                    {{ Form::open(['route' => 'jobs.store']) }}

                    <div class="mt-4">
                        {{ Form::label('title', 'Job Title', ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-white']) }}
                        {{ Form::text('title', null, ['class' => 'mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm', 'placeholder' => 'Job Title']) }}
                    </div>

                    <div class="mt-4">
                        {{ Form::label('description', 'Job Description',  ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-white']) }}
                        {{ Form::textArea('description', null, ['class' => 'mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm', 'placeholder' => 'Job Description']) }}
                    </div>

                    <div class="mt-4">
                        {{ Form::label('budget', 'Job Budget',  ['class' => 'block mb-2 text-sm font-medium text-gray-900 dark:text-white']) }}
                        {{ Form::number('budget', null, ['class' => 'mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm', 'placeholder' => 'Budget - $', 'step' => 'any']) }}
                    </div>

                    {{ Form::submit('Post Job', ['class' => 'mt-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
