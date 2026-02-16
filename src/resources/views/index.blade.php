<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="FashionablyLate__content">
            <div class="FashionablyLate__heading">
                <h2>Contact</H2>
            </div>
        </div>
        <form class="form">
            <div class="form__group">
                <div class="form_group-title">
                    <span class="form_label--item">お名前</span>
                    <span class="form_label--required">*</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="例：山田" />
                        <input type="text" name="name" placeholder="例：太郎" />
                    </div>
                    <div class="form__error">
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">*</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--text">
                        <input type="checkbox" name="checkbox">
                    </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">女性</span>
                    </div>
                    <div class="form__group--content">
                        <div class="form__input--text">
                            <input type="checkbox" name="checkbox" />
                        </div>
                    <div class="form__error">
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">電話番号</span>
                </div>
                <div class="form__group--content">
                    <input type="tel" name="tel" placeholder="080-1234-5678" />
                </div>
                <div class="form__error">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">*</span>
                </div>
                <div class="form__group--context">
                    <div class="form__input--address">
                        <input type="address" placeholder="例：東京都渋谷区千駄々谷１ー２ー３" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--content">
                        <input type="building" placeholder="例：千駄ヶ谷マンション101" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">*</span>
                </div>
                <div class="form__group--content">
                    <div class="form__input--content">
                        <input type="text" name="detail" placeholder="選択してください" />
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form_group--item">お問い合わせの内容</span>
                    <span class="form__group--required">*</span>
                </diV>
                <div class="form__group--content">
                    <input type="created_at" name="updated_at">
                </div>
            </div>
        </form>
    </main>
</body>
</html>