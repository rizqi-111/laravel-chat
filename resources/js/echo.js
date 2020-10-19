import BusEvent from './bus'

Echo.join('chat-channel')
    .listen('ChatStoredEvent', (e) => {
        BusEvent.$emit('chat_sent',e.data)
    });