@props(['type','message'])

<script>
    document.addEventListener('DOMContentLoaded', function(){
        Swal.fire({
                icon: '{{ $type }}',
                title: '{{ucfirst(string: $type) }}',
                text: '{{ $message }}',
        });
    })
</script>