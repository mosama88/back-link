@extends('adminlte::page')
@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
        <h4 class="mt-4 text-dark">Loading</h4>

@stop

@push('css')

    {{-- Add here extra stylesheets --}}
    <style>
        .select2-container--default .select2-selection--single {
            height: 40px;
            /* لتحديد ارتفاع الحقل */
            line-height: 40px;
            /* لضبط النص في المنتصف */
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 40px;
            /* لضبط السهم */
        }
    </style>
@endpush

@push('js')
    <script>
        console.log("Session success: ", "{{ session('success') }}");

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}",
                timer: 3000,
                showConfirmButton: false
            });
        @endif
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}",
                timer: 3000,
                showConfirmButton: false
            });
        @endif
    </script>
@endpush
