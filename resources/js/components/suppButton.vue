<template>

    <a  id="waitButton" class="btn btn-danger" @click="confirmMoi()">
        <span class="text">Je me modifie</span>
    </a>




</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

        },
        confirmMoi(){
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }
    }
</script>
