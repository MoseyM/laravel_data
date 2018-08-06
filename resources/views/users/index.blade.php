@extends('layouts/default')

@section('content')
<table class="table" id="usersTable">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    </thead>
</table>
@endsection

@section('extraScripts')
<script>
$(function() {
    $('#usersTable').dataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url("all") }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
        ]
    });
});
</script>
@endsection


