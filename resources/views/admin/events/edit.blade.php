@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>
    <form action="{{ route('events.update', $event->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $event->title }}" required>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Event Date</th>
                    <th>VIP Ticket Price</th>
                    <th>Regular Ticket Price</th>
                    <th>Max Attendees</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- Loop through events and display each row --}}
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->event_date }}</td>
                        <td>{{ $event->vip_ticket_price }}</td>
                        <td>{{ $event->regular_ticket_price }}</td>
                        <td>{{ $event->max_attendees }}</td>
                        <td>
                            <a href="{{ route('events.show', $event->id) }}">View</a>
                            <a href="{{ route('events.edit', $event->id) }}">Edit</a>
                            {{-- Add delete button and form --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button type="submit">Update Event</button>
    </form>
@endsection
