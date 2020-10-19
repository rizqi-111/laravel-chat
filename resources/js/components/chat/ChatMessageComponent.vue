<template>
    <div class="chat-list">
        <div class="messages" v-for="chat in chats" :key="chat.id">
            <div class="users">
                {{chat.user.name}} <span class="time">{{chat.created_at}}</span>
            </div>
            <div class="message">
                " {{chat.subject}} "
            </div>
        </div>
    </div>
</template>

<script>
    import BusEvent from '../../bus'
    export default {
        data(){
            return {
                chats: []
            }
        },
        mounted() {
            this.getChats()
            BusEvent.$on('chat_sent', (newChat)=>{
                this.chats.push(newChat)
                this.scrollToBottom()
            })
        },
        methods : {
            getChats(){
                axios
                .get('/chat/all')
                .then(responese => {
                    this.chats = responese.data.reverse()
                    this.scrollToBottom()
                })
            },
            scrollToBottom(){
                setTimeout(function(){
                    let chat_list = document.getElementsByClassName('chat-list')[0]
                    chat_list.scrollTop = chat_list.scrollHeight 
                }, 1)
            }
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

    .chat-list{
        max-height: 300px;
        overflow-y: scroll;
    }
</style>