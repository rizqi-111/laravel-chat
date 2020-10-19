<template>
    <div>
        <h4>Chat Box Component</h4>
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
