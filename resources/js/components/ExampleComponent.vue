<template>
    <div class="profile">
        <div class="profile-edit bg">
            
                <div class="input-group">
                    <label for="email-reg" class="form-label">Почта</label>
                    <input name="email" v-model="message.email" type="email" id="email-reg" class="form-input" placeholder="E-mail">
                </div>
                <div class="group-input-group">
                    <div class="input-group">
                        <label for="surname" class="form-label">Фамилия</label>
                        <input name="surname" v-model="message.surname" type="text" id="surname" class="form-input" placeholder="Иванов">
                    </div>
                    <div class="input-group">
                        <label for="name" class="form-label">Имя</label>
                        <input name="name" v-model="message.name" type="text" id="name" class="form-input" placeholder="Иван">
                    </div>
                    <div class="input-group">
                        <label for="patronymic" class="form-label">Отчество</label>
                        <input name="patronymic" v-model="message.patronymic" type="text" id="patronymic" class="form-input" placeholder="Иванович">
                    </div>
                </div>
                <div class="group-input-group">
                    <div class="input-group">
                        <label for="password" class="form-label">Пароль</label>
                        <input name="password" v-model="message.password" type="password" id="password" class="form-input" placeholder="********">
                    </div>
                </div>
                <div class="input-group">
                    <label for="group" class="form-label">Группа</label>
                    <input name="group" v-model="message.group" type="text" id="group" class="form-input" placeholder="111">
                </div>
                <div class="form-submit-block">
                    <p v-on:click="subm" class="form-submit">Редактировать</p>
                </div>

        </div>
        {{message}}
        <a href="#" class="profile-del">Удалить аккаунт</a>
    </div>
</template>

<style>
.profile-edit{
    width: 100%;
    padding: 24px;
    border-radius: 20px;
}
</style>

<script>

export default {
    data() {
        return {
            message:{
                email: '',
                surname: '',
                name: '',
                patronymic: '',
                password: '',
                group: '',
                _token:$('meta[name="csrf-token"]').attr('content'),
            }
        }
    },
    methods: {
        subm: function () {
            this.mess = {
                email: this.email,
                surname: this.surname,
                patronymic: this.patronymic,
                password:this.password,
                group:this.group,
                name:this.name
            }
            axios.post('/api/edit_profile',{email: this.email,surname: this.surname,patronymic: this.patronymic,password:this.password,group:this.group,name:this.name}).then((response)=>{
              console.log(response);
            }).catch((err)=>console.log(err))
        }
    }
}
</script>
