@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Messages</h1>
        
        @if ($messages->isEmpty())
            <p class="text-gray-500">No messages found.</p>
        @else
            <div class="space-y-4">
                @foreach ($messages as $message)
                    <div class="border-b pb-4">
                        <div class="flex justify-between">
                            <h3 class="text-lg font-semibold">{{ $message->username }}</h3>
                            <span class="text-sm text-gray-500">{{ $message->created_at->format('M d, Y H:i') }}</span>
                        </div>
                        <div class="text-sm text-gray-600">{{ $message->email }}</div>
                        <p class="mt-2">{{ $message->message }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection