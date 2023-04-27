<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Логин</title>
        <!-- VueJS -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
        <!-- JS -->
        <script>
            var login = new Vue({
                el: '#authform',
                data: {
                    status: '0',
                    email: '',
                    password: '',
                    errors: []
                },
                methods: {
                    submit() {
                        axios.post('/login', {
                            email: this.email,
                            password: this.password
                        }).then(response => {
                            this.status = response.status;
                        }).catch(error => {
                                this.errors = error.response.data.errors;
                            });
                    }
                }
            });
        </script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    </head>
    <body class="d-flex justify-content-center" style="padding: 40px 0px 0px 0px">
        <div class="login-container m-5" style="width: 250px; border: medium solid #0b0b0b;border-radius: 11px;" >
            <h2 class="mb-5">Авторизация</h2>
            <form id="authform" @submit.prevent="submit">
                <div class="form-group">
                    <label for="email">Email адрес</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Введите ваш email"
                        v-model="email"
                        v-bind="email">
                    <span v-if="errors.email" v-text="errors.email[0]"></span>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        placeholder="Введите ваш пароль"
                        v-model="password"
                        v-bind="password">
                    <span v-if="errors.password" v-text="errors.password[0]"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block" v-bind:disabled="!isValid">Войти</button>
            </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
