<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Online : {{users.length}}</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="user in users" :key="user.id ">
                                {{user.name}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import BusEvent from '../../bus'
    export default {
        data(){
            return {
                users : []
            }
        },
        mounted() {
            BusEvent.$on('chat_here',(users)=>{
                this.users = users
            })
            .$on('chat_joining', (user)=>{
                this.users.push(user)
            })
            .$on('chat_leaving',(user)=>{
                this.users = this.users.filter((u) => {
                    return u.id !== user.id
                })
            })
        }
    }
</script>
