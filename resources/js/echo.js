import BusEvent from './bus'

Echo.join('chat-channel')
    .here((users) => {
        //
        BusEvent.$emit('chat_here',users)
    })
    .joining((user) => {
        BusEvent.$emit('chat_joining',user)
    })
    .leaving((user) => {
        BusEvent.$emit('chat_leaving',user)
    })
    .listen('ChatStoredEvent', (e) => {
        BusEvent.$emit('chat_sent',e.data)
    });