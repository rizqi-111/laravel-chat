<template>
    <div>
        Chat Box Component
        <chat-message-component />
        <chat-form-component />
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
