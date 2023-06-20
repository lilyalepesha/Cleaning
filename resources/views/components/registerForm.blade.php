
    <div class="register__form-wrapper">
        <form action="{{route('register.store')}}" class="register__form" method="POST">
            @csrf
            <div class="register__form-close">
                &#10006;
            </div>
            <h3>Регистрация</h3>
            <div class="register__form-content">
                <label class="register__form-label" for="name">
                    <span class="register__form-desc">Имя</span>
                    <input type="text" name="name" placeholder="Введите имя">
                </label>
                @error('name')
                <span class="error-register">{{$message}}</span>
                @enderror
                <label class="register__form-label" for="email">
                    <span class="register__form-desc">Email</span>
                    <input type="email" name="email" placeholder="Введите email">
                </label>
                @error('email')
                <span class="error">{{$message}}</span>
                @enderror
                <label class="register__form-label" for="phone">
                    <span class="register__form-desc">Номер телефона</span>
                    <input type='tel' name="phone" placeholder="Введите номер телефона">
                </label>
                @error('phone')
                <span class="error">{{$message}}</span>
                @enderror
                <label class="register__form-label" for="password">
                    <span class="register__form-desc">Пароль</span>
                    <input type='password' name="password" placeholder="Введите пароль">
                </label>
                @error('password')
                <span class="error">{{$message}}</span>
                @enderror
                <label class="register__form-label" for="password_confirmation">
                    <span class="register__form-desc">Подтвердите пароль</span>
                    <input type='password' name="password_confirmation" placeholder="Введите пароль">
                </label>
                @error('password')
                <span class="error">{{$message}}</span>
                @enderror
                <button type="submit" class="button__blue register__form-button">Отправить</button>
            </div>
        </form>
    </div>

