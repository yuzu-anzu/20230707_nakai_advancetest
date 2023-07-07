<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>advance-test</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
</head>

<body>
    <header>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
    </header>
    <main>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="fullname" class="family-text" />
                        <input type="text" name="name" class="given-text" />
                    </div>
                    <div class="name">
                        <div class="family-name">例)山田</div>
                        <div class="given-name">例)太郎</div>
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <div class="gender">性別
                    <span class="form__label--required">※</span>
                </div>
                <div class="gender-label">
                    <input type="radio" name="gender" value="男性" checked="checked" class="label">男性
                    <input type="radio" name="gender" value="女性" class="label">女性
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" class="email" />
                    </div>
                    <div class="text-email">例) test@example.com</div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">郵便番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <div class="post">〒</div>
                            <input type="number" name="zip01" onKeyUp="AjaxZip3.zip2addr('zip01', '',  'address', 'address');"  class="text-postal" />
                        </div>
                        <div class="postal">例) 123-4567</div>
                        <div class="form__error">
                        @error('zip01')
                        {{ $message }}
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group--address">
                    <div class="form__input--add">
                        <input type="text" name="address" class="address1" />
                    </div>
                    <div class="address-level1">例) 東京都渋谷区千駄ヶ谷1-2-3</div>
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group--address">
                    <div class="form__input--add">
                        <input type="address" name="building_name" class="address2">
                    </div>
                    <div class="address-level2">例) 千駄ヶ谷マンション101</div>
                </div>
            </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">ご意見</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-text">
                    <div class="form__input--textarea">
                        <textarea name="opinion" rows="4" cols="42" class="textarea"></textarea>
                    </div>
                    <div class="form__error">
                        @error('opinion')
                        {{ $message }}
                        @enderror
                        </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認</button>
            </div>
        </form>
    </main>
</body>

</html>