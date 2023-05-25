@extends('components.layout')

@section('content')

    <div>
        <livewire:user-table>
    </div>

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#userModal').modal('hide');
        $('#updateUserModal').modal('hide');
        $('#deleteUserModal').modal('hide');
    })
</script>
@endsection
