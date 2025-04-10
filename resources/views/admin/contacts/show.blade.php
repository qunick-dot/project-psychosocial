@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Contact Message</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p><strong>Message:</strong> {{ $contact->message }}</p>
        </div>
    </div>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary mt-3">Back to List</a>
</div>
@endsection
