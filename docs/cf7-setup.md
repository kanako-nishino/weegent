# Contact Form 7 設定手順

テンプレート(page-contact.php など)は、CF7のフォームを **タイトルで** 呼び出しています。
下記のタイトルと完全に一致させてください(変更するとフォームが表示されなくなります)。

| タイトル | 設置ページ | 送信後の遷移先 |
|---|---|---|
| お問い合わせ | /contact/ ・DL系thanksページ内の相談フォーム | /contact/thanks/ |
| 資料3点セットダウンロード | /document-download/ | /document-download/thanks/ |
| 事例集ダウンロード | /case-download/ | /case-download/thanks/ |
| お役立ち資料ダウンロード | /resource-download/ | /resource-download/thanks/ |

## 作業の流れ

1. 「お問い合わせ > 新規追加」で上記4つのフォームを作成し、各「フォーム」タブの中身を下記に置き換える
2. 「メール」タブ(担当者への通知)と「メール(2)」タブ(自動返信。「メール(2)を使用」にチェック)を設定する
3. 固定ページを用意する
   - 親ページ: contact / document-download / case-download / resource-download
   - 各親ページの子ページとしてスラッグ `thanks` のページ(本文は空でOK。page-thanks.php が自動で適用されます)
4. 各フォームから実際に送信し、メール2通(通知・自動返信)とthanksページへの遷移を確認する

### 補足
- `[weegent_submit "ボタン文言" free]` はテーマ独自のタグで、既存デザインの送信ボタンを出力します(`free` で「無料」バッジ)。
- 項目名は `your-name` のように `your-` を付けています。`name` はWordPressの予約語で、送信時に不具合の原因になるためです。
- 通知メールの `[_url]` は送信元ページのURLです。DL系thanksページ内の相談フォームから来た場合は、thanksページのURLが入ります。

---

## 1. お問い合わせ

### フォーム

```html
<div class="form-field">
  <label for="contact-company"><span class="form-field__required">必須</span>会社名</label>
  [text* your-company id:contact-company autocomplete:organization placeholder "例）株式会社〇〇"]
</div>
<div class="form-field">
  <label for="contact-name"><span class="form-field__required">必須</span>お名前</label>
  [text* your-name id:contact-name autocomplete:name placeholder "例）〇〇 〇〇"]
</div>
<div class="form-field">
  <label for="contact-tel"><span class="form-field__required">必須</span>電話番号</label>
  [tel* your-tel id:contact-tel autocomplete:tel placeholder "例）0312345678"]
</div>
<div class="form-field">
  <label for="contact-email"><span class="form-field__required">必須</span>メールアドレス</label>
  [email* your-email id:contact-email autocomplete:email placeholder "例）info@example.com"]
</div>
<div class="form-field">
  <label for="contact-message"><span class="form-field__required">必須</span>ご相談・お問い合わせ内容</label>
  [textarea* your-message id:contact-message placeholder "例）導入を検討しています。他社との違いやオンボーディングのサポートについて伺いたいです。"]
</div>
<p class="form-panel__agreement"><a href="/privacy-policy/" target="_blank" rel="noopener noreferrer">個人情報保護方針</a>に同意したものとします。</p>
[weegent_submit "問い合わせる" free]
```

### メール(担当者への通知)

- 送信先: (通知先のメールアドレス)
- 題名: `【Webサイト】お問い合わせがありました（[your-company]様）`
- 追加ヘッダー: `Reply-To: [your-email]`
- メッセージ本文:

```
Webサイトからお問い合わせがありました。

会社名：[your-company]
お名前：[your-name]
電話番号：[your-tel]
メールアドレス：[your-email]

お問い合わせ内容：
[your-message]

--
送信元ページ：[_url]
送信日時：[_date] [_time]
```

### メール(2)(自動返信)

- 送信先: `[your-email]`
- 題名: `【株式会社Weegent】お問い合わせありがとうございます`
- メッセージ本文:

```
[your-company]
[your-name] 様

この度は株式会社Weegentにお問い合わせいただき、誠にありがとうございます。
以下の内容でお問い合わせを受け付けました。
2〜3営業日以内に、担当よりメールにてご連絡いたします。

――――――――――――――――
会社名：[your-company]
お名前：[your-name]
電話番号：[your-tel]
メールアドレス：[your-email]

お問い合わせ内容：
[your-message]
――――――――――――――――

※本メールは送信専用アドレスから自動送信しています。
※お心当たりのない場合は、お手数ですが本メールを破棄してください。

株式会社Weegent
〒150-0011 東京都渋谷区東3丁目24-13 Sreed EBISU+L 8階
TEL：03-6824-7902
```

---

## 2. 資料3点セットダウンロード

### フォーム

```html
<div class="form-field">
  <label for="document-company"><span class="form-field__required">必須</span>会社名</label>
  [text* your-company id:document-company autocomplete:organization placeholder "例）株式会社〇〇"]
</div>
<div class="form-field">
  <label for="document-name"><span class="form-field__required">必須</span>お名前</label>
  [text* your-name id:document-name autocomplete:name placeholder "例）〇〇 〇〇"]
</div>
<div class="form-field">
  <label for="document-tel"><span class="form-field__required">必須</span>電話番号</label>
  [tel* your-tel id:document-tel autocomplete:tel placeholder "例）0312345678"]
</div>
<div class="form-field">
  <label for="document-email"><span class="form-field__required">必須</span>メールアドレス</label>
  [email* your-email id:document-email autocomplete:email placeholder "例）info@example.com"]
</div>
<p class="form-panel__agreement"><a href="/privacy-policy/" target="_blank" rel="noopener noreferrer">個人情報保護方針</a>に同意したものとします。</p>
[weegent_submit "資料をメールで受け取る" free]
```

### メール(担当者への通知)

- 送信先: (通知先のメールアドレス)
- 題名: `【Webサイト】資料3点セットの請求がありました（[your-company]様）`
- 追加ヘッダー: `Reply-To: [your-email]`
- メッセージ本文:

```
Webサイトから資料3点セットの請求がありました。
請求者へ資料をお送りください。

会社名：[your-company]
お名前：[your-name]
電話番号：[your-tel]
メールアドレス：[your-email]

--
送信元ページ：[_url]
送信日時：[_date] [_time]
```

### メール(2)(自動返信)

- 送信先: `[your-email]`
- 題名: `【株式会社Weegent】資料のご請求ありがとうございます`
- メッセージ本文:

```
[your-company]
[your-name] 様

この度は株式会社Weegentの資料をご請求いただき、誠にありがとうございます。
以下の内容でご請求を受け付けました。
資料は担当者より改めてメールにてお送りいたしますので、今しばらくお待ちください。

――――――――――――――――
ご請求資料：資料3点セット
会社名：[your-company]
お名前：[your-name]
電話番号：[your-tel]
メールアドレス：[your-email]
――――――――――――――――

※本メールは送信専用アドレスから自動送信しています。
※お心当たりのない場合は、お手数ですが本メールを破棄してください。

株式会社Weegent
〒150-0011 東京都渋谷区東3丁目24-13 Sreed EBISU+L 8階
TEL：03-6824-7902
```

---

## 3. 事例集ダウンロード

### フォーム

```html
<div class="form-field">
  <label for="case-email"><span class="form-field__required">必須</span>メールアドレス</label>
  [email* your-email id:case-email autocomplete:email placeholder "例）info@example.com"]
</div>
<p class="form-panel__agreement"><a href="/privacy-policy/" target="_blank" rel="noopener noreferrer">個人情報保護方針</a>に同意したものとします。</p>
[weegent_submit "事例集をメールで受け取る" free]
```

### メール(担当者への通知)

- 送信先: (通知先のメールアドレス)
- 題名: `【Webサイト】事例集の請求がありました（[your-email]）`
- 追加ヘッダー: `Reply-To: [your-email]`
- メッセージ本文:

```
Webサイトから事例集の請求がありました。
請求者へ事例集をお送りください。

メールアドレス：[your-email]

--
送信元ページ：[_url]
送信日時：[_date] [_time]
```

### メール(2)(自動返信)

- 送信先: `[your-email]`
- 題名: `【株式会社Weegent】事例集のご請求ありがとうございます`
- メッセージ本文:

```
この度は株式会社Weegentの事例集をご請求いただき、誠にありがとうございます。
事例集は担当者より改めてメールにてお送りいたしますので、今しばらくお待ちください。

――――――――――――――――
ご請求資料：事例集
メールアドレス：[your-email]
――――――――――――――――

※本メールは送信専用アドレスから自動送信しています。
※お心当たりのない場合は、お手数ですが本メールを破棄してください。

株式会社Weegent
〒150-0011 東京都渋谷区東3丁目24-13 Sreed EBISU+L 8階
TEL：03-6824-7902
```

---

## 4. お役立ち資料ダウンロード

資料カードのDLボタンから `?document_id=資料ID` 付きで遷移してきます。
`[hidden document_id default:get]` がURLの資料IDを受け取り、メールでは `[_document_title]` で資料名を差し込めます。
ID指定なし(「すべての資料をダウンロード」から来た場合)は「すべてのお役立ち資料（一括請求）」になります。

### フォーム

```html
[hidden document_id default:get]
<div class="form-field">
  <label for="resource-company"><span class="form-field__required">必須</span>会社名</label>
  [text* your-company id:resource-company autocomplete:organization placeholder "例）株式会社〇〇"]
</div>
<div class="form-field">
  <label for="resource-name"><span class="form-field__required">必須</span>お名前</label>
  [text* your-name id:resource-name autocomplete:name placeholder "例）〇〇 〇〇"]
</div>
<div class="form-field">
  <label for="resource-tel"><span class="form-field__required">必須</span>電話番号</label>
  [tel* your-tel id:resource-tel autocomplete:tel placeholder "例）0312345678"]
</div>
<div class="form-field">
  <label for="resource-email"><span class="form-field__required">必須</span>メールアドレス</label>
  [email* your-email id:resource-email autocomplete:email placeholder "例）info@example.com"]
</div>
<p class="form-panel__agreement"><a href="/privacy-policy/" target="_blank" rel="noopener noreferrer">個人情報保護方針</a>に同意したものとします。</p>
[weegent_submit "資料をメールで受け取る" free]
```

### メール(担当者への通知)

- 送信先: (通知先のメールアドレス)
- 題名: `【Webサイト】お役立ち資料の請求がありました（[_document_title]）`
- 追加ヘッダー: `Reply-To: [your-email]`
- メッセージ本文:

```
Webサイトからお役立ち資料の請求がありました。
請求者へ以下の資料をお送りください。

請求資料：[_document_title]

会社名：[your-company]
お名前：[your-name]
電話番号：[your-tel]
メールアドレス：[your-email]

--
送信元ページ：[_url]
送信日時：[_date] [_time]
```

### メール(2)(自動返信)

- 送信先: `[your-email]`
- 題名: `【株式会社Weegent】資料のご請求ありがとうございます`
- メッセージ本文:

```
[your-company]
[your-name] 様

この度は株式会社Weegentの資料をご請求いただき、誠にありがとうございます。
以下の内容でご請求を受け付けました。
資料は担当者より改めてメールにてお送りいたしますので、今しばらくお待ちください。

――――――――――――――――
ご請求資料：[_document_title]
会社名：[your-company]
お名前：[your-name]
電話番号：[your-tel]
メールアドレス：[your-email]
――――――――――――――――

※本メールは送信専用アドレスから自動送信しています。
※お心当たりのない場合は、お手数ですが本メールを破棄してください。

株式会社Weegent
〒150-0011 東京都渋谷区東3丁目24-13 Sreed EBISU+L 8階
TEL：03-6824-7902
```
