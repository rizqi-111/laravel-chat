<template>
    <div class="chat-list">
        <div class="messages">
            <div class="users">
                User999 <span class="time">20-20-2000 10:10:10</span>
            </div>
            <div class="message">
                "Pesan dari User999"
            </div>
        </div>
        <div class="messages">
            <div class="users">
                User777 <span class="time">20-20-2000 10:10:10</span>
            </div>
            <div class="message">
                "Pesan dari User777"
            </div>
        </div>
        <div class="messages">
            <div class="users">
                User555 <span class="time">20-20-2000 10:10:10</span>
            </div>
            <div class="message">
                "Pesan dari User555"
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style lang="scss">
    .messages{
        margin-top: 5px;
        .time{
            font-weight: 800;
        }
        .message{
            font-size: 1.2rem;
        }
    }
</style>