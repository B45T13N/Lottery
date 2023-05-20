@extends('layout.app')

@section('content')
    <form action="{{ route('participation.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Adresse e-mail :</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="border border-gray-300 rounded px-3 py-2 w-full @error('email') border-red-500 @enderror">
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            <p id="error-message" class="hidden text-red-500 text-xs mt-1">L'adresse e-mail est invalide.</p>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-not-allowed" disabled>Participer</button>
    </form>
    <script type="text/javascript" src="/js/emailValidation.js">
    </script>
@endsection


