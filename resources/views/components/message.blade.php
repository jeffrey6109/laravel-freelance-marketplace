@if (count($errors) > 0)
    @foreach ($errors->all as $error)
        <div class="bg-red-100 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Errors!</strong>
            <span class="block sm:inline">{{ $error }}</span>
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="bg-green-100 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

@if (session('error'))
    <div class="bg-red-100 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Errors!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif
