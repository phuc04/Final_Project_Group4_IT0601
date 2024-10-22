@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chat Room</div>

                <div class="card-body">
                    <!-- Hiển thị các tin nhắn -->
                    <ul>
                        @foreach ($messages as $message)
                            <li><strong>{{ $message->user->name }}:</strong> {{ $message->message }}</li>
                        @endforeach
                    </ul>

                    <!-- Form để gửi tin nhắn mới -->
                    <form action="{{ route('chat') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
